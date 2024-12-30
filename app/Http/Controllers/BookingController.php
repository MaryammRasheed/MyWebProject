<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Assuming you have a Booking model

class BookingController extends Controller
{
    // Show the booking form
    public function index()
    {
        return view('frontend.booking.index'); // Your booking form view
    }

    // Store the booking details
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'guests' => 'required|integer|min:1',
            'date_time' => 'required|date',
        ]);

        // Store the booking in the database
        Booking::create($validated);

        // Redirect back with a success message
        return redirect()->route('book.index')->with('success', 'Your booking has been successfully made.');
    }
}

