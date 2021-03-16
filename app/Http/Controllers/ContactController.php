<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\Contact as ContactRequest;
use App\Jobs\Contact\Create;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        $this->dispatchNow($contactCreated = new Create(
            $request->name,
            $request->business,
            $request->email,
            $request->phone,
            $request->message
        ));

        return redirect()->route('submitted-contact');
    }

    public function submitted()
    {
        return view('submitted-contact');
    }
}
