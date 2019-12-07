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


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($total_price,$phone,$seat_no)
    {
        $this->total_price = $total_price;
        $this->phone = $phone;
        $this->seat_no = $seat_no;
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
        return $this->view('mails.ticket',compact('total_price','phone','seat_no'));
    }
}
