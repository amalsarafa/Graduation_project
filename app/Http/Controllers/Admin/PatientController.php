<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
      $patients=Patient::all();
      return view('admin.patients.index',[
       'patients'=> $patients
      ]);
    }

    public function create() {
        // عرض نموذج إضافة مريض
    }

    public function store(Request $request) {
        // حفظ مريض جديد
    }

    public function edit($id) {
        // تعديل بيانات مريض
    }

    public function update(Request $request, $id) {
        // حفظ التعديلات
    }

    public function destroy($id) {
        // حذف مريض
    }
}
