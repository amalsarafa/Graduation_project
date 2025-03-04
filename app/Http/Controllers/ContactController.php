<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactUs::latest()->paginate(10); 
        
        return view('admin.contact-messages.index', compact('messages'));
    }
    
    public function store(Request $request)
    {
       
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        
        ContactUs::create($request->all());

        return response()->json(['message' => 'تم إرسال الرسالة بنجاح!']);
    }

    public function destroy($id) {
        $messages=ContactUs::findOrFail($id);
        $messages->delete();
        return redirect()->route('admin.contact-messages')
                         ->with('success', 'تم حذف الرسالة بنجاح.');
    }
}
