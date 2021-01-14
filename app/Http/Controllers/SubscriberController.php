<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Contracts\Mail\Mailer;
use App\Http\Requests\Subscriber\SubscribeRequest;

class SubscriberController extends Controller
{
    public function subscribe(SubscribeRequest $request, Mailer $mailer)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->subscriber_email;

        $subscriber->save();

        $mailer->to($subscriber->email)->send(new \App\Mail\Subscriber\Verify($subscriber));

        return redirect()->route('subscribed')->with([
            'email' => $request->subscriber_email,
        ]);
    }

    public function subscribed()
    {
        return view('subscribed');
    }

    public function verify(Request $request, Subscriber $subscriber)
    {
        $subscriber->verified = true;

        $subscriber->save();

        $email = $subscriber->email;

        return view('verified', compact('subscriber', 'email'));
    }
}
