<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketBooking;

class TicketBookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDatas(Request $request)
    {
    	print_r($request->all());
    }

    // Ticket Booking
    function bus_seat_booking(Request $request){
    
        $allInfo = $request;
        return view('customer.journey_deatails',compact('allInfo'));
    	// print_r($request->all());
   //  	$check = TicketBooking::insert([
   //  		'terminal_id' =>$request->terminal_id,
			// 'customer_name_id' =>$request->customer_name_id,
			// 'phone_id' =>$request->phone_id,
			// 'bus_name_id' =>$request->bus_name_id,
			// 'journey_date_id' =>$request->journey_date_id,
			// 'departure_time_id' =>$request->departure_time_id,
			// 'destination_id' =>$request->destination_id,
			// 'seat_no' =>$request->seat_no,
			// 'ticket_price' =>$request->ticket_price,
			// 'ticket_token' =>12324,
			// 'total_price' =>$request->total_price,
   //  	]);
   //  	if ($check) {
   //  		echo "Done";
   //  	}
   //  	else{
   //  		echo "Fail";
   //  	}
    }

    function saveTicket(Request $request){
        // print_r($request->all());

        $check = TicketBooking::insertGetId([
            'terminal' =>$request->terminal,
            'customer_name' =>$request->customer_name,
            'phone' =>$request->phone,
            'bus_name' =>$request->bus_name,
            'bus_chassis' =>$request->bus_chassis,
            'journey_date' =>$request->journey_date,
            'departure_time' =>$request->departure_time,
            'destination' =>$request->destination,
            'seat_no' =>$request->seat_no,
            'total_seat' =>$request->total_seat,
            'ticket_price' =>$request->ticket_price,
            'ticket_token' =>rand(),
            'total_price' =>$request->total_price,
        ]);
        if ($check) {
            $total_price = $request->total_price;
            $phone = $request->phone_id;
            $seat_no = $request->seat_no;
            return view('stripe',compact('check','total_price','phone','seat_no'));
        }
         else{
            echo "Fail";
        }
    }
}
