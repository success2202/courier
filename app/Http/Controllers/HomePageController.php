<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function Index()
    {
        $data['sliders'] = Slider::latest()->get();
        $data['services'] = Services::latest()->get();
        $data['testimonial'] = Testimonial::latest()->get();
        return view('dashboard', $data);
    }

    public function AboutUs()
    {

        return view();
    }
}
