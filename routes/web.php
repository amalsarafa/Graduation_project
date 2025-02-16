<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//admin
Route::get('/admin/dashboard', 'App\\Http\\Controllers\\Admin\\DashboardController@index')->name('admin.dashboard');
Route::get('/admin/profile', 'App\\Http\\Controllers\\Admin\\AdminProfileController@index')->name('admin.profile');
Route::get('/admin/patients', 'App\\Http\\Controllers\\Admin\\PatientController@index')->name('admin.patients');
Route::get('/admin/doctors', 'App\\Http\\Controllers\\Admin\\DoctorController@index')->name('admin.doctors');
Route::get('/admin/services', 'App\\Http\\Controllers\\Admin\\ServiceController@index')->name('admin.services');
Route::get('/admin/notifications', 'App\\Http\\Controllers\\Admin\\NotificationController@index')->name('admin.notifications');

//doctor
Route::get('/doctor/dashboard', 'App\\Http\\Controllers\\Doctor\\DashboardController@index')->name('doctor.dashboard');
Route::get('/doctor/profile', 'App\\Http\\Controllers\\Doctor\\DoctorProfileController@index')->name('doctor.profile');
Route::get('/doctor/patients', 'App\\Http\\Controllers\\Doctor\\PatientController@index')->name('doctor.patients');
Route::get('/doctor/appointments', 'App\\Http\\Controllers\\Doctor\\AppointmentController@index')->name('doctor.appointments');




//patient
Route::get('/patient/dashboard', 'App\\Http\\Controllers\\Patient\\DashboradController@index')->name('patient.dashboard');
Route::get('/patient/profile','App\\Http\\Controllers\\Patient\\PatientProfileController@index')->name('patient.profile');
Route::get('/patient/reservations', 'App\\Http\\Controllers\\Patient\\PatientRervervationController@index')->name('patient.revservations');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
