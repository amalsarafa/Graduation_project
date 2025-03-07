<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientReservation;
use App\Models\Service;
use App\Models\PatientService;

class BookController extends Controller
{
    public function index()

   {   
     $user = Auth::user();
     $doctors = Doctor::with('user')->get(); 
       $services = Service::all();
       return view('website.home', compact('doctors','services','user'));
   }
   public function store(Request $request)
{
    $request->validate([
        'doctor_user_id' => 'required|exists:users,id',  // 
        'service_id' => 'required|exists:services,id',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required',
    ]);

    $patient = Auth::user();

    if (!$patient) {
        return response()->json(['error' => 'يجب تسجيل الدخول لإتمام الحجز'], 401);
    }

    $doctor = Doctor::where('user_id', $request->doctor_user_id)->first();

    if (!$doctor) {
        return response()->json(['error' => 'لم يتم العثور على بيانات الطبيب'], 404);
    }

    $reservation = PatientReservation::create([
        'patient_id' => $patient->id, // 
        'doctor_id' => $doctor->id, 
        'date' => $request->date,
        'time' => $request->time,
        'service' => Service::find($request->service_id)->name,
        'status' => 'pending',
    ]);

    
    return response()->json(['success' => 'تم تأكيد الحجز بنجاح!']);
}


}
