<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    // Show the sign-in form
    public function index()
    {
        return view('signin');
    }

    // Handle the sign-in form submission
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check if the user exists in the database
        $user = User::where('email', $request->email)->first();

        // If the user is found and the password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user information in the session (or create a custom session management logic)
            session(['user_id' => $user->id]);

            // Redirect to the home page or any other page after successful login
            return redirect()->intended('/');
        }

        // If login fails, return with an error message
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
