<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'country' => 'required|string',
            'region_state' => 'required|string',
            'adults' => 'required|integer',
            'children' => 'required|integer',
            'room' => 'required|string',
        ]);

        $extra_services = $request->has('extra_services') ? implode(',', $request->extra_services) : null;

        Checkout::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'region_state' => $request->region_state,
            'adults' => $request->adults,
            'children' => $request->children,
            'room' => $request->room,
            'extra_services' => $extra_services,
        ]);

        return redirect()->back()->with('success', 'Checkout completed successfully!');
    }
}
