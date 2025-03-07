<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\PatientReservation;

class DoctorProfileController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $doctor = $user->doctor;

        $dailyAppointments = PatientReservation::where('doctor_id', auth()->user()->doctor->id)
        ->whereDate('date', today())
        ->count();

        $weeklyAppointments = PatientReservation::where('doctor_id', auth()->user()->doctor->id)
        ->whereBetween('date', [
            now()->startOfWeek()->format('Y-m-d'),
            now()->endOfWeek()->format('Y-m-d')
        ])
        ->count();

    $treatmentPatients = PatientReservation::where('doctor_id', auth()->user()->doctor->id)
        ->distinct('patient_id')
        ->count('patient_id');
       

    // الحصول على آخر 5 حجوزات للطبيب
    $latestReservations = PatientReservation::with('patient')
        ->where('doctor_id', auth()->user()->doctor->id)
        ->orderBy('created_at', 'desc') // ترتيب حسب تاريخ الإنشاء
        ->limit(5) 
        ->get();

            return view('doctor.profile.index', compact(
            'doctor', 'user','dailyAppointments', 'weeklyAppointments', 'treatmentPatients','latestReservations'));
        

    }

    
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $user = Auth::user();
    $doctor = $user->doctor;

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone_number' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'country' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:500',
        'specialization' => 'required|string|max:255',
        'license_number' => 'required|string|max:255',
        'academic_qualifications' => 'nullable|string|max:255',
        'years_experience' => 'nullable|integer',
        'training_courses' => 'nullable|string',
        'professional_certificate' => 'nullable|file|mimes:pdf,jpg,png',
    ]);

    $user->update([
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'country' => $request->country,
        'address' => $request->address,
    ]);

    
    $doctor->update([
        'specialization' => $request->specialization,
        'license_number' => $request->license_number,
        'academic_qualifications' => $request->academic_qualifications,
        'years_experience' => $request->years_experience,
        'training_courses' => $request->training_courses,
    ]);

    // إذا كان هناك ملف شهادة مهنية
    if ($request->hasFile('professional_certificate')) {
        $certificatePath = $request->file('professional_certificate')->store('certificates', 'public');
        $doctor->professional_certificate = $certificatePath;
        $doctor->save();
    }

    
    return redirect()->route('doctor.profile', $doctor->id)->with('success', 'تم تحديث بيانات الطبيب بنجاح!');
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