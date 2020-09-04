<?php

namespace App\Http\Controllers;

use App\Article;
use App\Subscriber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $subscriberCount = Subscriber::count();
        $articleCount    = Article::count();

        return view('admin.index', compact('subscriberCount', 'articleCount'));
    }
}
