<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;
use App\TicketBooking;
use App\Mail\TicketEmail;
use Mail;


class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->total_price,
                "currency" => "BDT",
                "source" => $request->stripeToken,
                "description" => $request->phone." Paied",
        ]);

        TicketBooking::find($request->check)->update([
            'payment_status' => 1,
        ]);
            $total_price = $request->total_price;
            $phone = $request->phone;
            $check = $request->check;
            $seat_no = $request->seat_no;
            $total_seat= $request->total_seat;
            $customer_name = $request->customer_name;
            $gender = $request->gender;
            $bus_name = $request->bus_name;
            $bus_type = $request->coach_type;
            $bus_chassis = $request->bus_chassis;
            $journey_date = $request->journey_date;
            $departure_time = $request->departure_time;
            $departure = $request->departure;
            $destination = $request->destination;
            $bus_routes = $request->bus_route;
            $ticket_price = $request->ticket_price;
            $terminal = $request->terminal;
        Mail::to("anisahmed450@gmail.com")->send(new TicketEmail(
            $total_price,
            $phone,
            $seat_no,
            $total_seat,
            $customer_name,
            $gender,
            $bus_name,
            $bus_type,
            $bus_chassis,
            $journey_date,
            $departure_time,
            $bus_routes,
            $ticket_price,
            $terminal,
            $departure,
            $destination
          ));
          toastr()->success('Successfully Payment For Booking!');
        return redirect('/customer/bus_info');
        // Session::flash('success', 'Payment successful!');

        //   echo "Done";
        // return redirect('/customer/bus_info/view');
    }
}
