<?php

namespace App\Http\Controllers\Doctor;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
class DashboardController extends Controller
{
    public function index()
{
    $doctorId = auth()->id(); 
     
    $newPatients = Patient::where('created_at', '>=', now()->subMonth())->count(); // عدد المرضى الجدد آخر شهر
    $dailyVisits = Appointment::where('doctor_id', $doctorId)->whereDate('appointment_date', today())->count(); // عدد الزيارات اليومية
    $activePatients = Patient::whereHas('appointments', function ($query) use ($doctorId) {
        $query->where('doctor_id', $doctorId)->where('appointment_date', '>=', now()->subMonths(3)); // المرضى النشطون خلال آخر 3 أشهر
    })->count();

    return view('doctor.dashboard', compact('newPatients', 'dailyVisits', 'activePatients'));
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
