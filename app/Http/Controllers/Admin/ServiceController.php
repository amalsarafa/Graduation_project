<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Service;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{
    public function index() {
        $services=Service::paginate(10);
        $doctors = Doctor::with('user')->get();
        $admin = Auth::user();
        return view('admin.services.index',[
        'services'=> $services,
        'doctors'=> $doctors,
        'admin'=> $admin,

         ]);
    }

    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'medical_specialization' => 'required|string|max:255',
        'doctor_id' => 'required|exists:doctors,id',
    ]);

    Service::create([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
        'price' => $validatedData['price'],
        'medical_specialization' => $validatedData['medical_specialization'],
        'doctor_id' => $validatedData['doctor_id'],
        'status' => 'pending',   
    ]);

    return redirect()->route('admin.services')->with('success', 'تم إضافة الخدمة بنجاح!');;
}
   

    public function update(Request $request, $id) {
        $service = Service::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'medical_specialization' => 'required|string',
            'doctor_id' => 'required|exists:doctors,id',
            'status' => 'required|in:pending,approved,rejected',
        ]);
        $service->update($validatedData);
    
        return redirect()->back()->with([
        'success'=> 'تم تحديث الخدمة بنجاح'
        ]
        
        );
    
    }
    
       
    

    public function destroy($id) {
        $service=Service::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.services')
                         ->with('success', 'تم حذف الخدمة بنجاح.');
    }
}
