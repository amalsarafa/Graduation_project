<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

       
        $services = Service::where('name', 'LIKE', "%$query%")
                           ->orWhere('description', 'LIKE', "%$query%")
                           ->get();
        
        $doctors = User::where('role', 'doctor')
                       ->where(function($q) use ($query) {
                           $q->where('name', 'LIKE', "%$query%")
                             ->orWhere('specialization', 'LIKE', "%$query%");
                       })->get();

        
        $patients = User::where('role', 'patient')
                        ->where('name', 'LIKE', "%$query%")
                        ->get();

        return view('website.search', compact('services', 'doctors', 'patients', 'query'));
    }
    }


