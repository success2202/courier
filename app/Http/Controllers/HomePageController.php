<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function Index()
    {
        return view('dashboard');
    }

    public function AboutUs()
    {

        return view();
    }
}
