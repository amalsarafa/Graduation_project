<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminProfileController extends Controller
{
    public function index() {
        $admin = User::where('role','admin')->first();
        $patients = User::where('role', 'patient')->get();
        return view('admin.profile.index',compact(
           'admin','patients'
        ));
        
    }

    public function edit() {
        // تعديل معلومات المسؤول
    }

    public function update(Request $request) {
        // حفظ التعديلات
    }
}
