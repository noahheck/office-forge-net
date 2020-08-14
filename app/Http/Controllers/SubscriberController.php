<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\Subscriber\SubscribeRequest;

class SubscriberController extends Controller
{
    public function subscribe(SubscribeRequest $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->subscriber_email;

        $subscriber->save();

        return redirect()->route('subscribed')->with([
            'email' => $request->subscriber_email,
        ]);
    }

    public function subscribed()
    {
        return view('subscribed');
    }
}
