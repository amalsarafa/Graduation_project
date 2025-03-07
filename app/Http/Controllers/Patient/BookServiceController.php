<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientReservation;
use App\Models\Service;
use App\Models\PatientService;
class BookServiceController extends Controller
{
    public function index()
    {  
        $user = Auth::user();
        $doctors = User::where('role', 'doctor')->get();
        $services = Service::all();
        
         
        return view('patient.bookservice', compact('doctors', 'user','services'));
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
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
        $doctor = Doctor::where('user_id', $request->doctor_user_id)->first();

        if (!$doctor) {
            return back()->withErrors(['error' => 'لم يتم العثور على بيانات الطبيب']);
        }

        PatientReservation::create([
            'patient_id' => $patient->id,
            'doctor_id' => $doctor->id, 
            'date' => $request->date,
            'time' => $request->time,
           'service' => Service::find($request->service_id)->name,
            'status' => 'pending',
        ]);
        PatientService::create([
            'patient_id' => $patient->id,
            'service_id' => $request->service_id,
        ]);
    
    
        
        return back()->with('success', 'تم تأكيد الحجز بنجاح!');
    }




}
