<?php

namespace App\Http\Controllers;

use App\Models\CourierInfo;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourierController extends Controller
{
    //

    public function Index(Request $req)
    {
        sleep(5);
        $code = Tracking::where('const_no', $req->constNo)->first();
        if($code)
        {
            $code->load('courier');
        }
        return view('users.tracking')
        ->with('tracking', $code);
    }


    public function Tracking()
    {
        return view('users.tracking');
    }

}
