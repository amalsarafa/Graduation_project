<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {
        $service=Service::all();
        return view('admin.services.index',[
        'service'=> $service
         ]);
    }

    public function create() {
        // عرض نموذج إضافة خدمة
    }

    public function store(Request $request) {
        // حفظ خدمة جديدة
    }

    public function edit($id) {
        // تعديل خدمة
    }

    public function update(Request $request, $id) {
        // حفظ التعديلات
    }

    public function destroy($id) {
        // حذف خدمة
    }
}
