<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\MedicalReport;
use App\Models\PatientReservation;

class DashboradController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $patientId = auth()->id(); 
        $reportCount = MedicalReport::where('patient_id', auth()->user()->patient->id )->count();
        $bookingsCount = PatientReservation::where('patient_id',  auth()->user()->patient->id)->count();
        $totalVisits = PatientReservation::where('patient_id', auth()->user()->patient->id)->count();
        return view('patient.dashboard', compact('reportCount','bookingsCount','totalVisits'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
