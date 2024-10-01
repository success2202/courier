<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
 
    public function Index()
    {
        $data['sliders'] = Slider::latest()->get();
        $data['services'] = Services::latest()->get();
        $data['blogs'] = Blog::latest()->get();
        $data['testimonials'] = Testimonial::latest()->get();
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

    public function ContactUs()
    {
        return view('users.contact');
    }

    public function ContactForm(Request $request)
    {
        $settings = Setting::latest()->first();
        $data = [
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'name' => $request->name,
        ];

        Mail::to($settings->site_email)->send(new ContactUsMail($data));
        Session::flash('message', 'Message sent succesfully');
        return back();
    }
    
}
