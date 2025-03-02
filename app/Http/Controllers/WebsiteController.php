<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
     return view('website.home'); 
    }
    public function about() {
     return view('website.about');
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
      return view('website.pages.feature');
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


