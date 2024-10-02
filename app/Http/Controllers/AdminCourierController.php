<?php

namespace App\Http\Controllers;

use App\Mail\CourierMail;
use App\Models\CourierInfo;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        $valid = Validator::make($req->all(), [
            'images' => 'required',
            'sender_email' => 'required',
            'receiver_email' => 'required',
            'sender_name' => 'required',
            'receiver_name' => 'required',
            'destination' => 'required',
        ]);
        if($valid->fails())
        {
            Session::flash('alert', 'error');
            Session::flash('message', 'Some Fields are missing');
            return back()->withInput($req->all()); 
        }
        try{
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
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }

    public function Tracking($id)
    {
        
        return view('admin.courier.tracking')
            ->with('courier', CourierInfo::where('id', decrypt($id))->first())
            ->with('bheading', 'Create Tracking Info')
            ->with('breadcrumb', 'Create Tracking Info');
    }

    public function TrackingStore(Request $req)
    {

      try{
        $courier = CourierInfo::where('id', $req->courier_info_id)->first();
      $tracking =  Tracking::create([
            'courier_info_id' => $req->courier_info_id,
            'const_no' => 'CGG-'.rand(111111111,99999999),
            'update_date'=> $req->update_date,
            'current_city'=> $req->current_city,
            'current_location'=> $req->current_location,
            'arrival_time'=> $req->arrival_time,
            'status'=> $req->status,
            'lat',
            'long',
            'comment'=> $req->comment,

        ]);
        $info = $courier->load('TrackingInfo');
       
        if ($tracking) {
            Mail::to($courier->receiver_email)->send(new CourierMail($info->toArray()));
            Session::flash('alert', 'success');
            Session::flash('message', 'Tracking Informaiton added successfully');
            return redirect()->intended(route('admin.courier.index'));
        }
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }

    public function Index()
    {
        return view('admin.courier.index')
        ->with('courier', CourierInfo::latest()->get())
        ->with('bheading', 'courier')
        ->with('breadcrumb', 'courier');
    }

    public function TrackingDetails($id)
    {
        try{
        $track = Tracking::where('courier_info_id', decrypt($id))->first();
        if(!$track)
        { 
            Session::flash('alert', 'error');
            Session::flash('message', 'You dont have Tracking information for this courier');
            return back();

        }
        return view('admin.courier.tracking_details')
        ->with('tracking', $track)
        ->with('courier', CourierInfo::where('id', decrypt($id))->first())
        ->with('bheading', 'tracking details')
        ->with('breadcrumb', 'tracking details');
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }

    public function UpdateTracking(Request $request, $id)
    {
        try{
        $track = Tracking::where('id', decrypt($id))->first();
        $courier = CourierInfo::where('id', $track->courier_info_id)->first();
        if($track)
        { 
            $track->fill($request->all())->save();
        }
        $info = $courier->load('TrackingInfo');
        if ($track) {
            Mail::to($courier->receiver_email)->send(new CourierMail($info->toArray()));
            Session::flash('alert', 'success');
            Session::flash('message', 'Tracking Informaiton added successfully');
            return redirect()->intended(route('admin.courier.index'));
        }
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    }

    public function CourierEdit($id)
    {
        return view('admin.courier.edit')
        ->with('courier', CourierInfo::where('id', decrypt($id))->first())
        ->with('bheading', 'courier Edit')
        ->with('breadcrumb', 'courier Edit');
    }

    public function CourierUpdate(Request $req, $id)
    {
        try{
        if ($req->images) {
            $images = [];
            foreach ($req->images as $image) {
                $fileName = $image->getClientOriginalName();
                $image->move('images', $fileName);
                $images[] = $fileName;
            }
        }
        $courier = CourierInfo::where('id', decrypt($id))->first();
        if($courier)
        {
            $courier->product = $req->product;      
            $courier->images = isset($images)?json_encode($images):$courier->images;
            $courier->weight  = $req->weight;
            $courier->amount = $req->amount;
            $courier->size = $req->size;
            $courier->type = $req->type;
            $courier->sender_name = $req->sender_name;
            $courier->sender_email = $req->sender_email;
            $courier->sender_phone = $req->sender_phone;
            $courier->sender_address = $req->sender_address;
            $courier->receiver_name = $req->receiver_name;
            $courier->receiver_email = $req->receiver_email;
            $courier->receiver_phone = $req->receiver_phone;
            $courier->receiver_address = $req->receiver_address;
            $courier->pick_date = $req->pick_date;
            $courier->departure_date = $req->departure_date;
            $courier->origin = $req->origin;
            $courier->destination = $req->destination;
            $courier->mode = $req->mode;
            $courier->qty = $req->qty;
            $courier->frieght = $req->frieght;
            $courier->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Courier Informaiton added successfully');
            return back();
        }
    }catch(\Exception $e)
    {
        Session::flash('alert', 'error');
        Session::flash('message', 'Something  went wrong');
        return back();
    }
    
    }
}
