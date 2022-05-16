<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        // dump(2);
        // dd(1);
        return view('home');
    }
}
