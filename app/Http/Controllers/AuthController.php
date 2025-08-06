<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
    public function register(Request $request){
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
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'country' => $validated['country'],
            'phone_number' => $validated['phone_number'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
            'verification_token' => Str::random(64),
        ]);

        // 3. Send verification email
        Mail::to($user->email)->send(new \App\Mail\VerifyEmail($user));

        // 4. Redirect to "check your email" page
        return redirect()->route('verify.notice');
    }

    //verify notice
    public function verifyNotice() {
        return view('auth.verify-notice');
    }

    //verify email
    public function verifyEmail($token){
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid verification token.');
        }

        $user->email_verified_at = now();
        $user->verification_token = null; // Clear token after verification
        $user->save();

        return redirect()->route('login')->with('success', 'Your email has been verified. You may now log in.');
    }

    //logging in
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }

        if (! $user->email_verified_at) {
            return back()->withErrors(['email' => 'Please verify your email before logging in.'])->withInput();
        }

        Auth::login($user);

        return redirect()->route('trader.overview'); // Adjust this if needed
    }

    //logging out 
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login')->with('status', 'You have been logged out.');
    }
}
