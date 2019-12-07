<?php

namespace App\Http\Controllers;
use App\Mail\TicketEmail;
use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
        public function index()
    {
    	if (session('check')) {
    		session('check');
    	}
    	echo "No data";
        // Mail::to("xubi.aunshon@gmail.com")->send(new TicketEmail());
    }
}
