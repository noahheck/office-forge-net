<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $articles = Article::published()->take(3)->get();

        $articles->load('author');

        return view('index', compact('articles'));
    }

    public function features()
    {
        return view('features');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function contact()
    {
        return view('contact');
    }

    public function business()
    {
        return view('business');
    }

    public function itTeams()
    {
        return view('it-teams');
    }
}
