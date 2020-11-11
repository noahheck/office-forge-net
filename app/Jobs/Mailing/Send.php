<?php

namespace App\Jobs\Mailing;

use App\Mailing;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Foundation\Bus\Dispatchable;

class Send
{
    use Dispatchable, Queueable;

    private $mailing;
    private $sentBy;
    private $subscribers;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Mailing $mailing, User $sentBy, $subscribers)
    {
        $this->mailing = $mailing;
        $this->sentBy = $sentBy;
        $this->subscribers = $subscribers;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailing = $this->mailing;

        $mailing->sent_at = now();
        $mailing->sent_by = $this->sentBy->id;

        $mailing->save();

        $mailing->subscribers()->sync($this->subscribers);

        $this->subscribers->each(function($subscriber) use ($mailing, $mailer) {
            $mailer->to($subscriber->email)->send(new \App\Mail\Mailing\Send($mailing));
        });
    }
}
