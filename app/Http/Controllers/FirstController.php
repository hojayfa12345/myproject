<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
     public function team()
    {
        return view('team');
    }
     public function pricing()
    {
        return view('pricing');
    }
}
