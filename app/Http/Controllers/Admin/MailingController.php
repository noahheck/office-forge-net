<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mailings\Store as StoreRequest;
use App\Http\Requests\Admin\Mailings\Update as UpdateRequest;
use App\Jobs\Mailing\Create;
use App\Jobs\Mailing\Send;
use App\Jobs\Mailing\Update;
use App\Mailing;
use App\Subscriber;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailings = Mailing::orderBy('created_at', 'DESC')->get();

        return view('admin.mailings.index', compact('mailings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mailing = new Mailing();

        return view('admin.mailings.create', compact('mailing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->dispatchNow($mailingCreated = new Create(
            $request->subject,
            $request->body_html,
            $request->body_text
        ));

        return redirect()->route('admin.mailings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function show(Mailing $mailing)
    {
        $subscriberCount = Subscriber::verified()->count();

        return view('admin.mailings.show', compact('mailing', 'subscriberCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailing $mailing)
    {
        if ($mailing->hasBeenSent()) {
            return redirect()->route('admin.mailings.index');
        }

        return view('admin.mailings.edit', compact('mailing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Mailing $mailing)
    {
        $this->dispatchNow($mailingUpdated = new Update(
            $mailing,
            $request->subject,
            $request->body_html,
            $request->body_text
        ));

        return redirect()->route('admin.mailings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailing $mailing)
    {
        if ($mailing->hasBeenSent()) {

            return redirect()->route('admin.mailings.index');
        }
        $mailing->delete();

        return redirect()->route('admin.mailings.index');
    }

    /**
     * Send the mailing to all subscribers
     *
     * @param \App\Mailing $mailing
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request, Mailing $mailing)
    {
        if ($mailing->hasBeenSent()) {

            return redirect()->route('admin.mailings.index');
        }

        $subscribers = Subscriber::verified()->get();

        $this->dispatchNow($mailingSent = new Send($mailing, $request->user(), $subscribers));

        return redirect()->route('admin.mailings.index');
    }
}
