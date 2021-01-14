<?php

namespace App\Mail\Subscriber;

use App\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class Verify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Subscriber
     */
    private $subscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $verificationUrl = URL::signedRoute('verify_subscriber', [$this->subscriber]);



        return $this->view('mail.subscriber.verify')
            ->text('mail.subscriber.verify_text')
            ->subject("Thank you for subscribing!")
            ->with([
                'verificationUrl' => $verificationUrl,
            ]);
    }
}
