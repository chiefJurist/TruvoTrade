<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //viewing login page
    public function showLogin()  {
        return view('auth.login');
    }

    //viewing register page
    public function showRegister() {
        return view('auth.register');
    }

    //viewing forgot password
    public function forgotPassword()  {
        return view('auth.forgot-password');
    }

    //registering the user
    public function register(Request $request)
    {
        // 1. Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'country' => 'required|string',
            'phone_number' => 'required|string|unique:users,phone_number',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string',
            'password' => 'required|min:8|confirmed',
        ]);

        // 2. Create user with hashed password and verification token
        $user = User::create([
            ...$validated,
            'password' => Hash::make($validated['password']),
            'verification_token' => Str::random(64),
        ]);

        // 3. Send verification email
        Mail::to($user->email)->send(new \App\Mail\VerifyEmail($user));

        // 4. Redirect to "check your email" page
        return redirect()->route('show.login')->with('status', 'Please check your email to verify your account.');
    }
}
