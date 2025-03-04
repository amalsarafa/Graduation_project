<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DoctorRatingController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\PatientController as AdminPatientController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\TaskController;


use App\Http\Controllers\Doctor\DashboardController as DoctorDashboardController;
use App\Http\Controllers\Doctor\DoctorProfileController;
use App\Http\Controllers\Doctor\PatientController as DoctorPatientController;
use App\Http\Controllers\Doctor\AppointmentController;

use App\Http\Controllers\Patient\DashboradController as PatientDashboardController;
use App\Http\Controllers\Patient\PatientProfileController;
use App\Http\Controllers\Patient\PatientRervervationController;


//website
Route::controller(WebsiteController::class)->group(function () {
    // Main Pages
    Route::get('/', 'home')->name('website.home');
    Route::get('/about', 'about')->name('website.about');
    Route::get('/blog', 'blog')->name('website.blog');
    Route::get('/contact', 'contact')->name('website.contact')->middleware('auth');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::post('/contact', [ContactController::class, 'store'])->middleware('auth');
  

    //Pages
    Route::get('/team', 'team')->name('website.page.team');
    Route::get('/price', 'price')->name('website.page.price');
    Route::get('/healthEvents', 'healthEvents')->name('website.page.healthEvents');
    Route::get('/FAQ', 'faq')->name('website.page.faq');
    Route::get('/testimonial', 'testimonial')->name('website.page.testimonial');
    Route::get('/feature', 'feature')->name('website.page.feature');
    Route::get('/CaregiverResources', 'CaregiverResources')->name('website.page.caregiverResources');


   // Blog Pages
   Route::get('/Healthy-nutrition', 'nutrition')->name('website.blog.nutrition');
   Route::get('/chronic-diseases', 'diseases')->name('website.blog.diseases');
   Route::get('/Home-nursing-care', 'Nursingcare')->name('website.blog.nursingcare');
   Route::get('/Mentalhealth', 'Mentalhealth')->name('website.blog.mentalhealth');

   // Services Pages
   Route::get('/services', 'services')->name('website.services');

   Route::get('/service1', function () {
       return view('website.services.service1');
   })->name('website.services.service1');

   Route::get('/service2', function () {
       return view('website.services.service2');
   })->name('website.services.service2');

   Route::get('/service3', function () {
       return view('website.services.service3');
   })->name('website.services.service3');

   Route::get('/service4', function () {
       return view('website.services.service4');
   })->name('website.services.service4');

   Route::get('/service5', function () {
       return view('website.services.service5');
   })->name('website.services.service5');

   Route::get('/service6', function () {
       return view('website.services.service6');
   })->name('website.services.service6');

   Route::get('/service7', function () {
       return view('website.services.service7');
   })->name('website.services.service7');

   Route::get('/service8', function () {
       return view('website.services.service8');
   })->name('website.services.service8');
});




// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
   
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/{id}', [AdminProfileController::class, 'updateImage'])->name('profile.updateImage');
    Route::put('/password/update', [AdminProfileController::class, 'updatePassword'])->name('password.update');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


    Route::get('/patients', [AdminPatientController::class, 'index'])->name('patients');
    Route::post('/patients/store', [AdminPatientController::class, 'store'])->name('patients.store');
    Route::delete('/patients/{id}', [AdminPatientController::class, 'destroy'])->name('patients.destroy');
    

    Route::get('/doctors', [AdminDoctorController::class, 'index'])->name('doctors');
    Route::post('/doctors/store', [AdminDoctorController::class, 'store'])->name('doctors.store');
    Route::delete('/doctors/{id}', [AdminDoctorController::class, 'destroy'])->name('doctors.destroy');
    
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');

    Route::get('/contact-messages', [ContactController::class, 'index'])->name('contact-messages');
    Route::delete('/contact-messages/{id}', [ContactController::class, 'destroy'])->name('contact-messages.destroy');
});



// Doctor Routes
Route::prefix('doctor')->name('doctor.')->middleware(['auth', RoleMiddleware::class . ':doctor'])->group(function () {
    Route::get('/dashboard', [DoctorDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DoctorProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [DoctorProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/image', [DoctorProfileController::class, 'updateImage'])->name('profile.updateImage');
    Route::put('/password/update', [DoctorProfileController::class, 'updatePassword'])->name('password.update');

    Route::get('/patients', [DoctorPatientController::class, 'index'])->name('patients');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments');
});




// Patient Routes
Route::prefix('patient')->name('patient.')->middleware(['auth', RoleMiddleware::class . ':patient'])->group(function () {
    Route::get('/dashboard', [PatientDashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [PatientProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [PatientProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/image', [PatientProfileController::class, 'updateImage'])->name('profile.updateImage');
    Route::put('/password/update', [PatientProfileController::class, 'updatePassword'])->name('password.update');

    Route::get('/reservations', [PatientRervervationController::class, 'index'])->name('reservations');
    Route::post('/reservations/store', [PatientReservationController::class, 'store'])->name('reservations.store');
    
});









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


