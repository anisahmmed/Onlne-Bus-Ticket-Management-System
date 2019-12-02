<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BusRoute;
use App\Operator;
use App\Destination;

class HomepageController extends Controller
{
    function blog(){
        echo "alsdkj";
    }
	
    function index(){
    	$all_bus_route = BusRoute::all();
    	$all_operator = Operator::all();
    	return view('homepage.index',compact('all_bus_route','all_operator'));
    }

    //Contact
    function contact(){
        return view('homepage.contact');
    }

    //Destinations
    function destinations(){
        $all_destination = Destination::paginate(7);
        return view('homepage.destinations',compact('all_destination'));
    }

    //About
    function about(){
        return view('homepage.about');
    }



    // Blocked user
    function blocked_user(){
    	return view('admin.blocked_user');
    }
}
