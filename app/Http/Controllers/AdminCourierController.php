<?php

namespace App\Http\Controllers;

use App\Models\CourierInfo;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCourierController extends Controller
{
    //

    public function createCourierInfo()
    {
        return view('admin.courier.create')
            ->with('bheading', 'Create Courier Info')
            ->with('breadcrumb', 'Create Courier Info');
    }

    public function CourierStore(Request $req)
    {
        if ($req->images) {
            $images = [];
            foreach ($req->images as $image) {
                $fileName = $image->getClientOriginalName();
                $image->move('images', $fileName);
                $images[] = $fileName;
            }
        }

        $cour =   CourierInfo::create([
            'product' => $req->product,
            'images' => json_encode($images),
            'weight'  => $req->weight,
            'amount' => $req->amount,
            'size' => $req->size,
            'type' => $req->type,
            'invoice_id' => rand(1111111111, 999999999),
            'sender_name' => $req->sender_name,
            'sender_email' => $req->sender_email,
            'sender_phone' => $req->sender_phone,
            'sender_address' => $req->sender_address,
            'receiver_name' => $req->receiver_name,
            'receiver_email' => $req->receiver_email,
            'receiver_phone' => $req->receiver_phone,
            'receiver_address' => $req->receiver_address,
            'pick_date' => $req->pick_date,
            'departure_date' => $req->departure_date,
            'origin' => $req->origin,
            'destination' => $req->destination,
            'mode' => $req->mode,
            'qty' => $req->qty,
            'frieght' => $req->frieght,
        ]);

        if ($cour) {
            Session::flash('alert', 'success');
            Session::flash('message', 'Courier Informaiton added successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }

    public function Tracking()
    {
        return view('admin.courier.tracking')
            ->with('courier', CourierInfo::latest()->get())
            ->with('bheading', 'Create Tracking Info')
            ->with('breadcrumb', 'Create Tracking Info');
    }

    public function TrackingStore(Request $req)
    {

      $tracking =  Tracking::create([
            'courier_info_id' => $req->courier_info_id,
            'const_no' => rand(111111111111,9999999999),
            'update_date'=> $req->update_date,
            'current_city'=> $req->current_city,
            'current_location'=> $req->current_location,
            'arrival_time'=> $req->arrival_time,
            'status'=> $req->status,
            'lat',
            'long',
            'comment'=> $req->comment,

        ]);
        if ($tracking) {
            Session::flash('alert', 'success');
            Session::flash('message', 'Tracking Informaiton added successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
}
