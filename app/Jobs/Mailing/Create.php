<?php

namespace App\Jobs\Mailing;

use App\Mailing;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

class Create
{
    use Dispatchable, Queueable;

    private $subject;
    private $body_html;
    private $body_text;

    private $mailing;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subject, $body_html, $body_text)
    {
        $this->subject = $subject;
        $this->body_html = $body_html;
        $this->body_text = $body_text;
    }

    public function getMailing(): Mailing
    {
        return $this->mailing;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailing = new Mailing;
        $mailing->subject = $this->subject;
        $mailing->body_html = $this->body_html;
        $mailing->body_text = $this->body_text;

        $mailing->save();

        $this->mailing = $mailing;
    }
}
