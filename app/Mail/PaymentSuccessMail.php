<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $paymentDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $paymentDetails)
    {
        $this->user = $user;
        $this->paymentDetails = $paymentDetails;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Payment Successful')
            ->view('emails.payment-success')
            ->with([
                'user' => $this->user,
                'paymentDetails' => $this->paymentDetails,
            ]);
    }
}
