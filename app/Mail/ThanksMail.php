<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThanksMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $products;
    
    public function __construct($user, $products)
    {
        $this->user = $user;
        $this->products = $products;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.thanks')
        ->subject('ご購入ありがとうございます。');
    }
}
