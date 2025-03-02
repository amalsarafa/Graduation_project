<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
       $doctorsCount = User::where('role', 'doctor')->count();
       $patientsCount = User::where('role', 'patient')->count();
       // عدد المراجعين النشطين (كمثال، الذين قاموا بتسجيل الدخول خلال 7 أيام الماضية
        $activeReviewersCount = User::where('role', 'patient')
                                    ->where('updated_at', '>=', now()->subDays(7))
                                    ->count();
         $serviceCount=Service::count();                           
        return view('admin.dashboard',compact(
            'patientsCount', 'doctorsCount', 'activeReviewersCount','serviceCount','admin'
        ));
        
    } 
}
