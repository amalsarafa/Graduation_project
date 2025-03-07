<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientReservation;
use Illuminate\Support\Facades\Auth;
use App\Models\DoctorRating;

class PatientController extends Controller
{
    
    public function index()
    {
       
    $appointments = PatientReservation::with('patient')
    ->where('doctor_id', auth()->user()->doctor->id)
    ->get();
    $doctor = Auth::user(); 
    $ratings = DoctorRating::where('doctor_id', $doctor->doctor->id)->get();
    return view('doctor.patient.index', compact('appointments','ratings'));
}

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
