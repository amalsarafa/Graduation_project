<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
class DoctorController extends Controller
{
    public function index() {
        $doctors=Doctor::paginate();
        $admin = Auth::user();
        return view('admin.doctors.index',[
        'doctors'=> $doctors,
        'admin'=> $admin
         ]);
    }

       public function store(Request $request)
       {
           $validatedData = $request->validate([
               'name' => 'required|string|max:255',
               'phone_number' => 'required|string|unique:users,phone_number',
               'email' => 'required|email|unique:users,email',
               'password' => 'required|string|min:6',
               'birth_date' => 'required|date|before:today',
               'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
               'gender' => 'required|string',
               'country' => 'required|string',
               'address' => 'required|string',
               'specialization' => 'required|string|max:255',
               'license_number' => 'required|string|unique:doctors,license_number',
               'academic_qualifications' => 'required|string',
               'years_experience' => 'required|integer|min:0',
               'training_courses' => 'nullable|string',
               'professional_certificate' => 'nullable|string',
           ]);

           $profileImagePath = null;
           if ($request->hasFile('profile_image')) {
               $profileImagePath = $request->file('profile_image')->store('doctor_profiles', 'public');
           }

           $user = User::create([
               'name' => $validatedData['name'],
               'phone_number' => $validatedData['phone_number'],
               'birth_date' => $validatedData['birth_date'],
               'email' => $validatedData['email'],
               'password' => Hash::make($validatedData['password']),
               'profile_image' => $profileImagePath,
               'country' => $validatedData['country'] ?? null,
               'address' => $validatedData['address'] ?? null,
               'role' => 'doctor', 
           ]);
       
           
           Doctor::create([
               'user_id' => $user->id,
               'specialization' => $validatedData['specialization'],
               'license_number' => $validatedData['license_number'],
               'academic_qualifications' => $validatedData['academic_qualifications'] ?? null,
               'years_experience' => $validatedData['years_experience'] ?? null,
               'training_courses' => $validatedData['training_courses'] ?? null,
               'professional_certificate' => $validatedData['professional_certificate'] ?? null,
               'gender' => $validatedData['gender'] ?? null,
           ]);
          
           return redirect()->route('admin.doctors')->with('success', 'تم إضافة الطبيب بنجاح.');

       }
         
  
       public function destroy($id)
       {
           $doctor = Doctor::findOrFail($id);
           $user = $doctor->user;
           if ($user) {
               $user->delete();

           return redirect()->back()->with('success', 'تم حذف الطبيب بنجاح.');
       }

    }
   
      
}
