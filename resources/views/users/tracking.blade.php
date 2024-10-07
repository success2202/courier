@extends('layouts.app')
@section('contents')


<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> product tracking </h2>
                        <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>                                   
                        <li class="active">Track</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">    
        <div class="theme-container container ">  
            <div class="row pad-10">
                <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                    <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                        <form class="" action="{{route('users.courier.index')}}" method="post">
                            @csrf
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <input type="text" name="constNo"  placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <button class="btn-1" id="btn">track your product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
            @if(isset($tracking))
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body bg-primary"  style="width: 400px; text-align:center">
                           <p class=""> Details retrieve successfully</p> 
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin:20px; 0px 40px 0px">
            <div class="progress-wrap">
                <div class="progress-status">
                    <span class="border-left"></span>
                    <span class="border-right"></span>
                    <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                    <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  
                        <span class="dot dot-center theme-clr-bg"></span> </span>
                    <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                </div>
                <div class="row progress-content upper-text">
                    <div class="col-md-2 col-xs-8 col-sm-2">
                        <p class="fs-12 no-margin"> Departed from </p>
                        <h2 class="title-1 no-margin">{{$tracking->courier->origin}}</h2>
                    </div>
                    <div class="col-md-3 col-xs-8 col-sm-3">
                        <p class="fs-12 no-margin"> [ <b class="black-clr">
                            
                           Departure Date: {{$tracking->courier->departure_date}}
                          
                        
                        </b> ] </p>                                
                    </div>
                    <div class="col-md-3 col-xs-8 col-sm-4 text-center">
                        <p class="fs-12 no-margin"> currently city </p>
                        <h2 class="title-1 no-margin">{{$tracking->current_city}}</h2>
                    </div>
                    <div class="col-md-2 col-xs-8 col-sm-1 no-pad">
                        <p class="fs-12 no-margin"> [ <b class="black-clr"> Arrival Date: {{$tracking->arrival_time}} </b> ] </p>                                
                    </div>
                    <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                        <p class="fs-12 no-margin"> Destination </p>
                        <h2 class="title-1 no-margin">{{$tracking->courier->destination}}</h2>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Shipping Information</h3>
                            <ul>
                                <li>
                                
                                  <span class="fs-16">{{$tracking->courier->sender_name}}</span> <br>
                                   <span class="fs-16">{{$tracking->courier->sender_email}}</span> <br>
                                    <span class="fs-16">{{$tracking->courier->sender_phone}}</span> <br>
                                   <span class="fs-16">{{$tracking->courier->sender_address}}</span> <br>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-5">
                            <h3> Reciever Information</h3>
                            <ul>
                                <li>
                                
                                  <span class="fs-16">{{$tracking->courier->receiver_name}}</span> <br>
                                   <span class="fs-16">{{$tracking->courier->receiver_email}}</span> <br>
                                    <span class="fs-16">{{$tracking->courier->receiver_phone}}</span> <br>
                                   <span class="fs-16">{{$tracking->courier->receiver_address}}</span> <br>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-2">
                            @if(isset($tracking->courier->images))
                            @foreach (json_decode($tracking->courier->images) as $ss)
                        
                            <img alt="" src="{{asset('images/'.$ss)}}"  max-height="120px"/>  
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                    <div class="prod-info -clr" style="background:#f9f9f9; color:#000">
                        <h5>
                            Shipment Information
                            <hr>
                        </h5>
                        <ul>
                            <li> <span class="title-2">Product Name:</span> <span class="fs-16">{{$tracking->courier->product}}</span> </li>
                            <li> <span class="title-2">Reference No.:</span> <span class="fs-16">{{$tracking->courier->invoice_id}}</span> </li>
                            <li> <span class="title-2">Delivrey status:</span> <span class="fs-16 theme-clr">
                                @if($tracking->status == 'CREATED') <span class=" bg-primary p-1">CREATED  </span> 
                                @elseif($tracking->status == 'SHIPPED') <span class=" bg-info p-1">SHIPPED  </span>
                                @elseif($tracking->status == 'IN_TRANSIT') <span class=" bg-secondary p-1">IN TRANSIT  </span>
                                @elseif($tracking->status == 'IN_PROCESS') <span class=" bg-primary p-1">IN PROCESS  </span>
                                @elseif($tracking->status == 'ON_HOLD') <span class=" bg-warning p-1">ON HOLD  </span>
                                @elseif($tracking->status == 'CANCELLED') <span class=" bg-danger p-1">CANCELLED  </span>@endif
                            </span> </li>
                            <li> <span class="title-2">Origin:</span> <span class="fs-16">{{$tracking->courier->origin}}</span> </li>
                            <li> <span class="title-2">Destination:</span> <span class="fs-16">{{$tracking->courier->destination}}</span> </li>
                            <li> <span class="title-2">Departure Time::</span> <span class="fs-16">{{$tracking->courier->departure_date}}</span> </li>
                            <li> <span class="title-2">Carrier:</span> <span class="fs-16">{{$settings->site_name}}</span> </li>
                            <li> <span class="title-2">Package:</span> <span class="fs-16">{{$tracking->courier->type}}</span> </li>
                            <li> <span class="title-2">Expected Delivery Date:</span> <span class="fs-16">{{$tracking->courier->arrival_time}}</span> </li>
                             
                            <li> <span class="title-2">order date:</span> <span class="fs-16">{{$tracking->courier->created_at->format('d-m-Y')}}</span> </li>
                           
                            <li> <span class="title-2">weight (kg):</span> <span class="fs-16">{{$tracking->courier->weight}}</span> </li>
                            <li> <span class="title-2">Order Amount:</span> <span class="fs-16">{{$tracking->courier->frieght}}</span> </li>
                            <li> <span class="title-2">Total Frieght:</span> <span class="fs-16">{{$tracking->courier->amount}}</span> </li>
                            <li> <span class="title-2">Comment:</span> <span class="fs-16">{{$tracking->courier->comment}}</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
            {{-- <div class="col-md-4 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s" style="background:#0000001b"> 
               
            </div> --}}
                <div class="col-12 mt-5">
                    <h3>Shipment History</h3>
                <table class="table">
                <thead>
                    <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
                </thead> 
                <tbody>
                    @foreach ($tracking->trackHistory as $tracks)
                    <tr>
                    <td>{{$tracks->date}} </td>
                    <td>{{$tracks->time}} </td>
                    <td>{{$tracks->location}} </td>
                    <td>{{$tracks->status}} </td>
                    <td>{{$tracks->remarks}} </td>
                    </tr>    
                    @endforeach  
                </tbody> 
                </table>
            </div>
        </div>
        </div>
    </div>
                    {{-- ---------------- --}}
                </div>
            </div>
           
            @else 
            <div class="row">
                 <div class="col-md-2 pad-30 wow">

                 </div>
                 <div class="col-md-3 pad-0 wow">
            <div class="card">
                <div class="card-body bg-info pl-5"  style="width: 500px">
                   <p class="text-25"> Please input a correct tracking code to get tracking information</p> 
                </div>
            </div>
            </div>
            </div>

            @endif
        </div>
    </section>
    <!-- /.Tracking -->

</article>
@endsection

@section('script')

<script>

$('#sender').on('click', function() {
    document.getElementById('details').hidden = false;
})
$('#btn').on('click', function(){
    $('#btn').html("<button class=\"btn-1\"> Please wait ....</button>")
})

</script>
@endsection