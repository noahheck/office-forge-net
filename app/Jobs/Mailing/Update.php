<?php

namespace App\Jobs\Mailing;

use App\Mailing;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

class Update
{
    use Dispatchable, Queueable;

    private $mailing;
    private $subject;
    private $body_html;
    private $body_text;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Mailing $mailing, $subject, $body_html, $body_text)
    {
        $this->mailing = $mailing;
        $this->subject = $subject;
        $this->body_html = $body_html;
        $this->body_text = $body_text;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailing = $this->mailing;

        $mailing->subject = $this->subject;
        $mailing->body_html = $this->body_html;
        $mailing->body_text = $this->body_text;

        $mailing->save();
    }
}
