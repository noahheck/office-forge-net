<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function features()
    {
        return view('features');
    }

    public function pricing()
    {
        return view('pricing');
    }
}
