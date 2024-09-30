@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-7">
            <div class="card bg-secondary-gradient">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h6 class="card-title mb-3">Welcome back Admin!</h6>
                            <p>Manage your website easily.</p>
                            
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/'.$settings->site_logo)}}" alt="..." class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        <span>Admin Last Login</span>
                        
                    </h6>
                   
                    <div class="table-responsive mt-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                            <tr>
                                <th class="wd-40">Location</th>
                                <th class="wd-25 text-center">Login Ip</th>
                                <th class="wd-35 text-center">Date Login</th>
                                <th class="wd-35"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> 
                                    @php $details = json_decode(file_get_contents("http://ipinfo.io/$login->login_ip/json"));
                                    echo $details->city.", ".$details->country;
                                    @endphp
                                    </td> 
                                <td class="text-center">{{$login->login_ip}}</td>
                                <td class="text-center text-success">{{$login->created_at}}</td> 
                            </tr>
                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
            
        </div>
     
    </div>
</div>
@endsection