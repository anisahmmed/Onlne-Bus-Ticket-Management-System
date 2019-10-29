<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
    	return view('user.index');
    }

    function bus_seat()
    {
    	return view('user.bus_seat');
    }

    function bus_info()
    {
    	return view('user.bus_info');
    }

    function location_select()
    {
    	return view('user.location_select');
    }
}
