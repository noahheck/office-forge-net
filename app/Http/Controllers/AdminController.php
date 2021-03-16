<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use App\Mailing;
use App\Subscriber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $subscriberCount = Subscriber::count();
        $articleCount    = Article::count();
        $mailingCount    = Mailing::count();

        $contactsCount    = Contact::count();
        $newContactsCount = Contact::unread()->count();

        return view('admin.index', compact(
            'subscriberCount',
            'articleCount',
            'mailingCount',
            'contactsCount',
            'newContactsCount'
        ));
    }
}
