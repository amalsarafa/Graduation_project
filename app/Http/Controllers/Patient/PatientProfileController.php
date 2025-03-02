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
class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
            $user = Auth::user();
            $patient = $user->patient;
            if (!$user->patient) {
                return redirect()->route('website.home')->with('error', 'لا يوجد ملف مريض مرتبط بهذا الحساب.');
            }
        
            return view('patient.profile.index', compact('patient', 'user'));
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
        'previous_report_file' => 'nullable|file|mimes:pdf,jpg,png,jpeg',
       
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

    if ($request->hasFile('previous_report_file')) {
        $filePath = $request->file('previous_report_file')->store('reports', 'public');
        $patient->previous_report_file = $filePath;
        $patient->save();
    }

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
