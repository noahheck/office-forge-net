<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Contact;
use App\Contact\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request, Contact $contact)
    {
        $note = new Note;
        $note->contact_id = $contact->id;
        $note->created_by = $request->user()->id;
        $note->note = $request->note;

        $note->save();

        return redirect()->route('admin.contacts.show', [$contact]);
    }
}
