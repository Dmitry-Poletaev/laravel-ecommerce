<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Cart;

class OrderInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->order = $request;
    }

    public $order;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $orders = Cart::content();

        return $this->markdown('emails.orderinfo', compact('orders'));
    }
}
