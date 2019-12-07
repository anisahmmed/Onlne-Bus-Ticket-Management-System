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
        Mail::to("xubi.aunshon@gmail.com")->send(new TicketEmail($total_price,$phone,'seat_no'));
        return redirect('/customer/bus_info');
        // Session::flash('success', 'Payment successful!');

        //   echo "Done";
        // return redirect('/customer/bus_info/view');
    }
}
