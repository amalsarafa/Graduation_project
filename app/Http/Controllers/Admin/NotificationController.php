<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index() {
        $notifications=Notification::all();
        return view('admin.notifications.index',[
         'notifications'=> $notifications
        ]);
    }

    public function create() {
        // عرض نموذج إرسال إشعار جديد
    }

    public function store(Request $request) {
        // حفظ إشعار جديد
    }

    public function destroy($id) {
        // حذف إشعار
    }
}
