<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function formDocs()
    {
        return view('features.form-docs');
    }

    public function files()
    {
        return view('features.files');
    }

    public function filestore()
    {
        return view('features.filestore');
    }

    public function reports()
    {
        return view('features.reports');
    }

    public function activities()
    {
        return view('features.activities');
    }
}
