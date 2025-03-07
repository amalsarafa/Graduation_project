<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PatientReservation;

use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index() {
      $admin = Auth::user();
      $patients=Patient::with(['user', 'appointments', 'services'])->paginate(10);
      $services=Service::all();
      $reservations = PatientReservation::get();
      return view('admin.patients.index',[
       'patients'=> $patients,
       'services'=> $services,
       'admin'=> $admin,
       'reservations'=> $reservations,
      ]);
    }
    
   // مثال لإضافة مريض جديد من قبل الادمن
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone_number' => 'required|string|max:20|unique:users,phone_number',
        'password' => 'required|string|min:6',
        'birth_date' => 'required|date',
        'country' => 'required|string',
        'address' => 'required|string',
        'id_number' => 'required|string|unique:patients',
        'gender' => 'required|in:male,female',
        
    ]);

    // إنشاء مستخدم جديد
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone_number = $request->phone_number;
    $user->password = Hash::make($request->password);
    $user->birth_date = $request->birth_date;
    $user-> country  = $request->country;
    $user->address  = $request->address;
    $user->save();

    // إنشاء سجل للمريض
    $patient = new Patient();
    $patient->user_id = $user->id;
    $patient->id_number = $request->id_number;
    $patient->gender = $request->gender;
    $patient->save();

    return redirect()->back()->with('success', 'تم إضافة المريض بنجاح');
}

public function destroy($id)
{
    $patient = Patient::findOrFail($id);
    $user = $patient->user;
    if ($user) {
        $user->delete();

    return redirect()->back()->with('success', 'تم حذف المريض بنجاح.');
}

}}


