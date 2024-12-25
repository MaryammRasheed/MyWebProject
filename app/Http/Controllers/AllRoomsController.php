<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllRoomsController extends Controller
{
    public function index()
    {

    return view ('all-rooms');
    }
}
