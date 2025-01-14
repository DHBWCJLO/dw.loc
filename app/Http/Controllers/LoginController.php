<?php

// File: app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Get the authenticated user
            $user = Auth::user();

            // Regenerate the remember_token
            $user->remember_token = Str::random(30);
            $user->save();
            // Redirect to intended page if successful
            return redirect()->intended('/fruits-list');
        }

        // Redirect back with an error message if unsuccessful
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Handle user logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}