<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class NotificationController extends Controller
{
    
        public function index() {
            $notifications = Notification::all();
            $admin = Auth::user();
            return view('admin.notifications.index', compact('notifications','admin'));
        }

   
    public function create() {
        // عرض نموذج إرسال إشعار جديد
    }

    public function store(Request $request) {
        // حفظ إشعار جديد
    }

    public function destroy($id) {
        $notification=Notification::findOrFail($id);
        $notification->delete();
        return redirect()->route('admin.notifications')
                         ->with('success', 'تم حذف الإشعار بنجاح.');
    }
}
