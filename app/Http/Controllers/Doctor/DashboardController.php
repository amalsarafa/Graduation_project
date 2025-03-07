<?php

namespace App\Http\Controllers\Doctor;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientReservation;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index()
{
    $doctorId = auth()->id(); 
    $totalDoctors = Doctor::count();
     //عدد مواعيد الطبيب
     $appointmentsCount = PatientReservation::where('doctor_id', auth()->user()->doctor->id)->count();
     // حساب عدد المرضى الذين لديهم مواعيد مع الطبيب
    $patientsCount = PatientReservation::where('doctor_id', auth()->user()->doctor->id)
    ->distinct('patient_id')
    ->count('patient_id');

    return view('doctor.dashboard', compact('appointmentsCount','patientsCount','totalDoctors'));
}




    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
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
