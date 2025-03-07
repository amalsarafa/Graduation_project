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
use App\Models\MedicalReport;
use App\Models\PatientReservation;

class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
            $user = Auth::user();
            $patient = $user->patient;
            $reports = MedicalReport::where('patient_id', $patient->id)->get();
            
            $doctors = User::where('role', 'doctor')->get();
            $patientId = $user->patient->id; 
           $totalVisits = PatientReservation::where('patient_id', $patientId)->count();

           $weeklyVisits = PatientReservation::where('patient_id', $patientId)
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
             ->count();

           $lastVisit = PatientReservation::where('patient_id', $patientId)
          ->latest('created_at')
           ->first();

            return view('patient.profile.index', compact(
                'patient', 'user','reports','doctors','patientId','totalVisits','weeklyVisits','lastVisit'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'report_name' => 'required|string|max:255',
            'report_date' => 'required|date',
            'report_type' => 'nullable|string|max:255',
            'doctor_user_id' => 'required|exists:users,id',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', // دعم أنواع محددة
        ]);
    
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('reports', 'public');
        } else {
            return back()->withErrors(['error' => 'لم يتم رفع الملف']);
        }
        $doctor = Doctor::where('user_id', $request->doctor_user_id)->first();
        $patient = Auth::user()->patient;
        if (!$patient) {
            return back()->withErrors(['error' => 'لم يتم العثور على بيانات المريض']);
        }
        MedicalReport::create([
            'report_name' => $request->report_name,
            'report_date' => $request->report_date,
            'report_type' => $request->report_type,
            'patient_id' => $patient->id,
            'doctor_id' => $doctor->id,
            'file_path' => $filePath,
        ]);
    
        return back()->with('success', 'تم رفع التقرير بنجاح');
    }
   
    public function update(Request $request, $id)
{
    $user = Auth::user();
    $patient = $user->patient; 

    $request->validate([
        'name' => 'required|string|max:255',
        'phone_number' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'country' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:500',
        'id_number' => 'nullable|string|unique:patients,id_number,' . $patient->id,
        'chronic_diseases_history' => 'nullable|string',
       
    ]);

    $patient->update([
        'id_number' => $request->id_number,
        'chronic_diseases_history' => $request->chronic_diseases_history,
        
    ]);

    $user->update([
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'country' => $request->country,
        'address' => $request->address,
    ]);

    

    return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح.');
}



    public function updateImage(Request $request)
{
    $request->validate([
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $doctor = auth()->user();

    if ($request->hasFile('profile_image')) {
        if ($doctor->profile_image) {
            Storage::disk('public')->delete($doctor->profile_image);
        }

        $path = $request->file('profile_image')->store('profile_images', 'public');
        
        $doctor->profile_image = $path;
        $doctor->save();
    }

    return redirect()->back()->with('success', 'تم تحديث الصورة الشخصية بنجاح');
}


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
    
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
        }
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        return back()->with('success', 'تم تغيير كلمة المرور بنجاح.');
    
    }
}
