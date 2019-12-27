<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketBooking;
use Carbon\Carbon;

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
    }

    function saveTicket(Request $request){
        // print_r($request->all());

        $check = TicketBooking::insertGetId([
            'terminal' =>$request->terminal,
            'customer_name' =>$request->customer_name,
            'gender' =>$request->customer_gender,
            'phone' =>$request->phone,
            'bus_name' =>$request->bus_name,
            'bus_type' =>$request->coach_type,
            'bus_chassis' =>$request->bus_chassis,
            'bus_route' =>$request->bus_route,
            'journey_date' =>$request->journey_date,
            'departure' =>$request->departure,
            'departure_time' =>$request->departure_time,
            'destination' =>$request->destination,
            'seat_no' =>$request->seat_no,
            'total_seat' =>$request->total_seat,
            'ticket_price' =>$request->ticket_price,
            'ticket_token' =>rand(),
            'total_price' =>$request->total_price,
            'created_at' =>Carbon::now(),
        ]);
        if ($check) {
            $customer_name = $request->customer_name;
            $bus_name = $request->bus_name;
            $gender = $request->customer_gender;
            $coach_type = $request->coach_type;
            $bus_chassis = $request->bus_chassis;
            $journey_date = $request->journey_date;
            $departure = $request->departure;
            $departure_time = $request->departure_time;
            $destination = $request->destination;
            $bus_route = $request->bus_route;
            $total_price = $request->total_price;
            $phone = $request->phone;
            $seat_no = $request->seat_no;
            $total_seat = $request->total_seat;
            $ticket_price = $request->ticket_price;
            $terminal = $request->terminal;
            return view('stripe',compact(
              'check',
              'total_price',
              'phone',
              'seat_no',
              'customer_name',
              'gender',
              'bus_name',
              'coach_type',
              'bus_chassis',
              'bus_route',
              'journey_date',
              'terminal',
              'departure',
              'destination',
              'departure_time',
              'ticket_price',
              'total_seat',
            ));
        }
         else{
            echo "Fail";
        }
    }

    function booking_info()
    {
      $all_ticket_booking_info = TicketBooking::where('payment_status', 1)->get();
      return view('admin.ticket_booking_info.booking_info',compact('all_ticket_booking_info'));
    }
//End
}
