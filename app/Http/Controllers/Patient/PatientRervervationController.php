<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientReservation;
use App\Models\DoctorRating;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Storage;
use App\Models\MedicalReport;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class PatientRervervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //تقييم طبيب
        $doctors = User::where('role', 'doctor')->get();
        $reservations=PatientReservation::paginate(10);
        return view('patient.Reservations.index',compact(
            'reservations','doctors'
         ));
    }


    public function store(Request $request)
    {
        $request->validate([
            'doctor_user_id' => 'required|exists:users,id',
            'comment' => 'nullable|string',
        ]);
    
        $patient = Patient::where('user_id', Auth::id())->first();
    
        if (!$patient) {
            return back()->withErrors(['error' => 'لم يتم العثور على بيانات المريض']);
        }
        $doctor = Doctor::where('user_id', $request->doctor_user_id)->first();

        if (!$doctor) {
            return back()->withErrors(['error' => 'لم يتم العثور على بيانات الطبيب']);
        }
    
        // إدخال التقييم في قاعدة البيانات
        DoctorRating::create([
            'patient_id' => $patient->id,
            'doctor_id' => $doctor->id, 
            'rating' => 5, 
            'comment' => $request->comment,
        ]);

    
        return back()->with('success', 'تم إرسال تقييمك بنجاح!');
    }
    

public function storeReport(Request $request)
{
    $request->validate([
        'report_name' => 'required|string|max:255',
        'report_date' => 'required|date',
        'report_type' => 'required|string|max:255',
        'doctor_id' => 'required|exists:users,id', 
        'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', // دعم أنواع محددة
    ]);

    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('medical_reports', 'public');
    } else {
        return back()->withErrors(['error' => 'لم يتم رفع الملف']);
    }

    MedicalReport::create([
        'report_name' => $request->report_name,
        'report_date' => $request->report_date,
        'report_type' => $request->report_type,
        'patient_id' => auth()->id(), 
        'doctor_id' => $request->doctor_id,
        'file_path' => $filePath,
    ]);

    return back()->with('success', 'تم رفع التقرير بنجاح');
}
}