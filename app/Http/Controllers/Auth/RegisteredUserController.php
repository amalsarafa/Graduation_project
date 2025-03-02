<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Patient; // 

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_number' => ['required', 'string', 'max:15'],
            'birth_date' => ['required', 'date'],
            'country' => ['required', 'string'],
            'address' => ['required', 'string'],
            'gender' => ['required', 'in:male,female'],
            'id_number' => ['required', 'string', 'max:20'],
            'chronic_diseases_history' => ['nullable', 'string'],
            'profile_image' => ['nullable', 'image', 'max:1024'],

        ]);
        //معالجة الصورة اذا كانت موجودة
        $profileImagePath = null;
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('profile_images', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'patient',  
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date,
            'country' => $request->country,
            'address' => $request->address,
            'profile_image' => $profileImagePath,
            
            
        ]);
        Patient::create([
            'user_id' => $user->id,  
            'id_number' => $request->id_number,
            'chronic_diseases_history' => $request->chronic_diseases_history,
            'gender' => $request->gender,
        ]);


        event(new Registered($user));

        Auth::login($user);

        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'doctor' => redirect()->route('doctor.dashboard'),
            'patient' => redirect()->route('patient.dashboard'),
            default => redirect()->route('website.home'), 
        };
    }
}
