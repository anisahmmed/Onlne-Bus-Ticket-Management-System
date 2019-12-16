<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class TicketEmail extends Mailable
{
    use Queueable, SerializesModels;


    // public $total_price,$seat_no,$phone;

    public $total_price =' ';
    public $phone =' ';
    public $seat_no =' ';
    public $total_seat =' ';
    public $customer_name =' ';
    public $gender =' ';
    public $bus_name =' ';
    public $bus_type =' ';
    public $bus_chassis =' ';
    public $journey_date =' ';
    public $departure_time =' ';
    public $departure =' ';
    public $destination =' ';
    public $bus_routes =' ';
    public $ticket_price =' ';
    public $terminal =' ';


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($total_price,$phone,$seat_no,$total_seat,$customer_name,$gender,$bus_name,$bus_type,$bus_chassis,$journey_date,$departure_time,$departure,$destination,$bus_routes,$ticket_price,$terminal)
    {
        $this->total_price = $total_price;
        $this->phone = $phone;
        $this->seat_no = $seat_no;
        $this->total_seat = $total_seat;
        $this->customer_name =$customer_name;
        $this->gender =$gender;
        $this->bus_name =$bus_name;
        $this->bus_type =$bus_type;
        $this->bus_chassis =$bus_chassis;
        $this->journey_date =$journey_date;
        $this->departure_time =$departure_time;
        $this->departure =$departure;
        $this->destination =$destination;
        $this->bus_routes =$bus_routes;
        $this->ticket_price =$ticket_price;
        $this->terminal =$terminal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $total_price ='';
         $phone ='';
         $seat_no ='';
         $total_seat ='';
         $customer_name ='';
         $gender ='';
         $bus_name ='';
         $bus_type='';
         $bus_chassis ='';
         $journey_date ='';
         $departure_time ='';
         $departure ='';
         $destination ='';
         $bus_routes ='';
         $ticket_price ='';
         $terminal ='';
        return $this->view('mails.ticket',compact(
          'total_price',
          'phone',
          'seat_no',
          'total_seat',
          'customer_name',
          'gender',
          'bus_name',
          'bus_type',
          'bus_chassis',
          'journey_date',
          'departure',
          'destination',
          'departure_time',
          'bus_routes',
          'ticket_price',
          'terminal'
        ));
    }
}
