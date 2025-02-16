<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index() {
         $doctors=Doctor::all();
        return view('admin.doctors.index',[
        'doctors'=> $doctors
         ]);
    }


    public function create() {
        // عرض نموذج إضافة طبيب
    }

    public function store(Request $request) {
        // حفظ طبيب جديد
    }

    public function edit($id) {
        // تعديل بيانات طبيب
    }

    public function update(Request $request, $id) {
        // حفظ التعديلات
    }

    public function destroy($id) {
        // حذف طبيب
    }
}
