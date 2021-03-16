<?php

namespace App\Jobs\Contact;

use App\Contact;
use App\Mail\Contact\Created;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Foundation\Bus\Dispatchable;

class Create
{
    use Dispatchable;

    private $name;
    private $business;
    private $email;
    private $phone;
    private $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $business, $email, $phone, $message)
    {
        $this->name = $name;
        $this->business = $business;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $contact = new Contact;

        $contact->name = $this->name;
        $contact->business = $this->business;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;

        $contact->save();

        $mailer->to(config('app.contactEmail'))->send(new Created($contact));
    }
}
