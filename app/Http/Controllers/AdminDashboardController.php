<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CourierInfo;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function Index(){
        return view('admin.index', [
            'courier' => CourierInfo::get(),
        ])
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index');
    }
}
