<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Return a view or a response
        return view('contact'); 
    }

    public function store(Request $request)
    {
        // Handle form submission logic
        // Example: save contact form data to the database
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Example: Log the data or save it
        \Log::info('Contact Form Submitted:', $data);

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}