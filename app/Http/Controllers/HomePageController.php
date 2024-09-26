<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Services;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
 
    public function Index()
    {
        $data['sliders'] = Slider::latest()->get();
        $data['services'] = Services::latest()->get();
        $data['blogs'] = Blog::latest()->get();
        return view('dashboard', $data);
    }

    public function BlogIndex()
    {
        return view('users.blogs')
        ->with('blogs', Blog::latest()->get());
    }

    public function AboutUs()
    {
        return view('users.about');
    }

    public function BlogDetails($id)
    {
        return view('users.blog_details')
        ->with('blog', Blog::where('id', decrypt($id))->first())
        ->with('blogs', Blog::latest()->get());
    }

    public function Services($service)
    {
        return view('users.services')
        ->with('service', Services::where('id', decrypt($service))->first());
    }

    
}
