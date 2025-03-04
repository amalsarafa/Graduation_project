<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorRating;

class DoctorRatingController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'comment' => 'nullable|string',
        ]);

        DoctorRating::create([
            'patient_id' => auth()->user()->id,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'تم إرسال التقييم بنجاح');
    }
}

