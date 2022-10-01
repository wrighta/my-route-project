<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home page returns the home view - blade.php
    public function home()
    {
        // note you refer to the view without the .blade.php
        // but ensure when you create the view it has the name home.blade.php
        return view('home');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }
}
