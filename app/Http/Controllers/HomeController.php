<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Will render home.blade.php
    }

    public function about()
    {
        return view('about'); // Will render about.blade.php
    }
}
