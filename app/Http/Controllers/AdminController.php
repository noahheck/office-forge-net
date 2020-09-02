<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $subscriberCount = Subscriber::count();

        return view('admin.index', compact('subscriberCount'));
    }
}
