<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $showingCompleted = false;
        $contactsQuery = Contact::open();

        if ($request->query('withCompleted', false)) {
            $contactsQuery = Contact::completed();
            $showingCompleted = true;
        }

        $contacts = $contactsQuery->orderBy('unread', 'DESC')->orderBy('created_at', 'DESC')->get();

        return view('admin.contacts.index', compact('contacts', 'showingCompleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        if ($contact->unread) {
            $contact->unread = false;
            $contact->save();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }


    public function unread(Contact $contact)
    {
        $contact->unread = true;
        $contact->completed = false;

        $contact->save();

        return redirect()->route('admin.contacts.index');
    }

    public function complete(Contact $contact)
    {
        $contact->completed = true;

        $contact->save();

        return redirect()->route('admin.contacts.index');
    }

    public function uncomplete(Contact $contact)
    {
        $contact->completed = false;

        $contact->save();

        return redirect()->route('admin.contacts.index');
    }
}
