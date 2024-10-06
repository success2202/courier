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
        try{
        sleep(1);
        $code = Tracking::where('const_no', $req->constNo)->first();
        if($code)
        {
            $code->load('courier', 'trackHistory');
        }
        return view('users.tracking')
        ->with('tracking', $code);
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }


    public function Tracking()
    {
        return view('users.tracking');
    }

}
