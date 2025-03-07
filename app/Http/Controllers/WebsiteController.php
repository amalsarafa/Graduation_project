<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientReservation;
use App\Models\Service;
use App\Models\PatientService;

class WebsiteController extends Controller
{
   public function home()

   {   
     $user = Auth::user();
       $doctors = User::where('role', 'doctor')->get();
       $services = Service::all();
       return view('website.home', compact('doctors','services','user'));
   }
   
    public function about() {
      $user = Auth::user();
      $doctors = Doctor::with('user')->get(); 
        $services = Service::all();
        return view('website.about', compact('doctors','services','user'));
   
     }
    public function blog() {
         return view('website.blog');
         }
    public function contact() { 
        return view('website.contact');
     }

    // Pages
    public function team() {
       return view('website.pages.team');
     }
    public function price() { 
      return view('website.pages.price'); 
    }
    public function healthEvents() { 
        return view('website.pages.healthEvents');
     }
    public function faq() { 
        return view('website.pages.FAQ');
     }
     public function testimonial() { 
        return view('website.pages.testimonial');
     }
     public function feature() { 
      $user = Auth::user();
      $doctors = User::where('role', 'doctor')->get();
      $services = Service::all();
      return view('website.pages.feature', compact('doctors','services','user'));
     
   }
   
   public function CaregiverResources() { 
      return view('website.pages.CaregiverResources');
   }

   //blogs
   public function nutrition() { 
      return view('website.blogs.detail-Healthy nutrition');
   }
   public function diseases() { 
      return view('website.blogs.detail-chronic-diseases');
   }
   public function  Nursingcare() { 
    return view('website.blogs.detail-Home nursing care');
 }
 
 public function Mentalhealth() { 
    return view('website.blogs.detail-Mental health');
 }


 //services
 public function services() {
   return view('website.services.index'); 
  }


}


