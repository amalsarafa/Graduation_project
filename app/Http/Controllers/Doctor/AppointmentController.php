<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    
    public function index()
    {
        $doctor = auth()->user()->doctor;

        $appointments = $doctor->reservations()
            ->with('patient') // جلب بيانات المريض المرتبطة
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->get();
        return view('doctor.Appointment.index',compact(
            'appointments'
        ));
    }

    
    



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
