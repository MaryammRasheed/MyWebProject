<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function expenses()
    {
        return view('dashboard.expenses');
    }
    public function showAddExpense()
    {
        return view('dashboard.add-expense');
    }
    public function settings()
    {
        return view('dashboard.settings');
    }
    public function pricing()
    {
        return view('dashboard.pricing');
    }
    public function showEditPricing()
    {
        return view('dashboard.edit-pricing');
    }
    public function showAddPricing()
    {
        return view('dashboard.add-pricing');
    }
    public function showAllBooking()
    {
        return view('dashboard.all-booking'); 
    }
    public function showEditBooking()
    {
        return view('dashboard.edit-booking'); 
    }
    public function showAddBooking()
    {
        return view('dashboard.add-booking'); 
    }
    public function showAllCustomers()
    {
        return view('dashboard.all-customers'); 
    }
    public function showAddCustomer()
    {
        return view('dashboard.add-customer'); 
    }
    public function showAdminRooms()
    {
        return view('dashboard.admin-rooms'); 
    }
    public function showEditRoom()
    {
        return view('dashboard.edit-room'); 
    }
    public function showAddRoom()
    {
        // $rooms=Room::all();
        return view('dashboard.add-room');//, ('add-room')); 
    }

    public function payments()
    {
        return view('dashboard.payments');
    }
    public function profile()
    {
        return view('dashboard.profile');
    }
    public function showEditProfile()
    {
        return view('dashboard.edit-profile');
    }
    public function activities()
    {
        return view('dashboard.activities');
    }
    public function login()
    {
        return view('dashboard.login');
    }
    public function showForgotPassword()
    {
        return view('dashboard.forgot-password');
    }
    public function register()
    {
        return view('dashboard.register');
    }
    public function showRooms()
    {
        $rooms = Room::all();

        return view('frontend.rooms.index', compact('rooms'));
    }
}
