<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientReservation;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\PatientService;


class ReserveController extends Controller
{
    public function index()
    {     
       
        // جدول عرض الحجوزات
        $patient = auth()->user()->patient;  
        $reservations = $patient->reservations;  
        return view('patient.reserve',compact(
            'reservations'
         ));
    }

    public function edit($id)
{
    $user = Auth::user();
    $doctors = User::where('role', 'doctor')->get();
    $reservation = PatientReservation::findOrFail($id);
    $services = Service::all();
    return view('patient.editreservation', compact('reservation','doctors','services','user'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'service_id' => 'required|exists:services,id',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required',
        'doctor_user_id' => 'required|exists:users,id'
    ]);

    $patient = Auth::user()->patient;
    if (!$patient) {
        return back()->withErrors(['error' => 'لم يتم العثور على بيانات المريض']);
    }

    $reservation = PatientReservation::findOrFail($id);
    
    if ($reservation->patient_id !== $patient->id) {
        return back()->withErrors(['error' => 'لا يمكنك تعديل هذا الحجز']);
    }

    $doctor = Doctor::where('user_id', $request->doctor_user_id)->first();
    if (!$doctor) {
        return back()->withErrors(['error' => 'لم يتم العثور على بيانات الطبيب']);
    }

    $reservation->update([
        'doctor_id' => $doctor->id,
        'date' => $request->date,
        'time' => $request->time,
        'service' => Service::find($request->service_id)->name, // تحديث اسم الخدمة
        'status' => 'pending',
    ]);

    PatientService::where('patient_id', $patient->id)->update(['service_id' => $request->service_id]);

    return back()->with('success', 'تم تعديل الحجز بنجاح!');
}


    public function destroy($id) {
        $reservations=PatientReservation::findOrFail($id);
        $reservations->delete();
        PatientService::where('patient_id', $reservations->patient_id)
        ->where('service_id', $reservations->service_id)
        ->delete();
        return redirect()->back()
                         ->with('success', 'تم حذف الحجز بنجاح.');
    }

}
