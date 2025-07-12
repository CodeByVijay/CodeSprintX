<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('home.pages.login');
    }
    public function showRegisterForm()
    {
        return view('home.pages.register');
    }
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|string|email|max:100|unique:users,email',
            'mobile_number' => 'required|regex:/^[0-9]{10}$/|unique:users,mobile_number',
            'password' => 'required|string|min:8|confirmed',
            'terms_and_conditions' => 'accepted',
        ]);

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password), // Hash the password
            'terms_and_conditions' => $request->terms_and_conditions ? 1 : 0,
            'is_active' => 0, // Set is_active to 0 by default
        ]);

        // Log the user in
        $request->session()->regenerate();
        Auth::login($user);

        // Redirect to the home page or wherever you want
        return redirect()->route('home');
    }


    public function login(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Redirect to the intended page or home
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
