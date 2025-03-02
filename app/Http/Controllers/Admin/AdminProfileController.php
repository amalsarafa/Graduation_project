<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
class AdminProfileController extends Controller
{
    public function index() {
        
        $admin = Auth::user();
        $patients=Patient::with(['user', 'appointments', 'services'])->get();
        $services=Service::all();
        $tasks=Task::all();
         // عدد المهام التي تم إنشاؤها اليوم
         $todayTasks = Task::whereDate('created_at', Carbon::today())->count();
         // عدد المهام الأسبوعية: من بداية الأسبوع حتى نهايته
        $weeklyTasks = Task::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();   
        // إجمالي عدد المهام
        $totalTasks = Task::count();
        return view('admin.profile.index',compact(
           'admin','patients','todayTasks', 'weeklyTasks', 'totalTasks','tasks'
        ));
    
    }
    public function update(Request $request, $id) {
        $admin = User::where('role', 'admin')->findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, 
            'specialization' => 'required|string|max:255',
            'phone_number' => 'required|string|unique:users,phone_number,' . $id . '|max:20', 
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',

        ]);
        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];
        $admin->specialization = $validatedData['specialization'];
        $admin->phone_number = $validatedData['phone_number'];
        $admin->address = $validatedData['address'];
        $admin->country = $validatedData['country'];
        $admin->save();
        return redirect()->back()->with('success', 'تم حفظ التغيرات بنجاح');
    }

   

public function updateImage(Request $request, $id)
{
    $request->validate([
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $admin = User::findOrFail($id);

    if ($request->hasFile('profile_image')) {
        if ($admin->profile_image) {
            Storage::delete($admin->profile_image);
        }

        $path = $request->file('profile_image')->store('profile_images', 'public');
        
        $admin->profile_image = $path;
        $admin->save();
    }
    return redirect()->back()->with('success', 'تم تحديث الصورة الشخصية بنجاح');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
    }

    Auth::user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    return back()->with('success', 'تم تغيير كلمة المرور بنجاح.');
}



}    
