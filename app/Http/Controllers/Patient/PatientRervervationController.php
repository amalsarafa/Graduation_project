<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientReservation;
use App\Models\DoctorRating;
use App\Models\Doctor;
use App\Models\User;
class PatientRervervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = User::where('role', 'doctor')->get();
        $reservations=PatientReservation::paginate(10);
        return view('patient.Reservations.index',compact(
            'reservations','doctors'
         ));
    }
    public function store(Request $request)
    {
         
    $request->validate([
        'doctor_id' => 'required|exists:users,id',
        'date' => 'required|date',
        'time' => 'required',
        'service' => 'required|string|max:255',
    ]);

    // التحقق من عدم وجود حجز سابق في نفس التاريخ والوقت لنفس الطبيب
    $existingReservation = PatientReservation::where('doctor_id', $request->doctor_id)
        ->where('date', $request->date)
        ->where('time', $request->time)
        ->exists();

    if ($existingReservation) {
        return response()->json(['error' => 'هذا الطبيب لديه حجز بالفعل في هذا الوقت. يرجى اختيار وقت آخر.'], 422);
    }

    // حفظ الحجز في قاعدة البيانات
    PatientReservation::create([
        'patient_id' => auth()->id(),
        'doctor_id' => $request->doctor_id,
        'date' => $request->appointment_date,
        'time' => $request->appointment_time,
        'service' => $request->service,
        'status' => 'pending',
    ]);

    return response()->json(['message' => 'تم الحجز بنجاح!'], 201);
}



    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
