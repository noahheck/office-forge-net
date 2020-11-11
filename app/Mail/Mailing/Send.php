<?php

namespace App\Mail\Mailing;

use App\Mailing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Mailing
     */
    private $mailing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mailing $mailing)
    {
        $this->mailing = $mailing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailings.send')
            ->text('mail.mailings.send_text')
            ->subject($this->mailing->subject)
            ->with([
                'html' => $this->mailing->body_html,
                'text' => $this->mailing->body_text,
            ]);
    }
}
