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
                
                <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s" style="background:#0000001b"> 
                    @if(isset($tracking->courier->images) && is_array($tracking->courier->images))
                    @foreach (json_decode($tracking->courier->images) as $ss)
                    <img alt="" src="{{asset('images/'.$ss)}}" />  
                    @endforeach
                    @endif
                    
                    
                </div>
                <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                    <div class="prod-info white-clr">
                        <ul>
                            <li> <span class="title-2">Product Name:</span> <span class="fs-16">{{$tracking->courier->product}}</span> </li>
                            <li> <span class="title-2">Product id:</span> <span class="fs-16">{{$tracking->courier->invoice_id}}</span> </li>
                            <li> <span class="title-2">order date:</span> <span class="fs-16">{{$tracking->courier->created_at->format('d-m-Y')}}</span> </li>
                            <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr">
                                @if($tracking->status == 'CREATED') <span class=" bg-primary">CREATED  </span> 
                                @elseif($tracking->status == 'SHIPPED') <span class=" bg-info">SHIPPED  </span>
                                @elseif($tracking->status == 'IN_TRANSIT') <span class=" bg-secondary">IN TRANSIT  </span>
                                @elseif($tracking->status == 'IN_PROCESS') <span class=" bg-primary">IN PROCESS  </span>
                                @elseif($tracking->status == 'ON_HOLD') <span class=" bg-warning">ON HOLD  </span>
                                @elseif($tracking->status == 'CANCELLED') <span class=" bg-danger">CANCELLED  </span>@endif
                            </span> </li>
                            <li> <span class="title-2">weight (kg):</span> <span class="fs-16">{{$tracking->courier->weight}} KG</span> </li>
                            <li> <span class="title-2">Order Amount:</span> <span class="fs-16">${{$tracking->courier->frieght}}</span> </li>
                            <li> <span class="btn btn-info" id="sender" onclick="">View Sender Details</span> </li>
                
                            <li hidden id="details">
                                
                                Sender Name: <span class="fs-16">{{$tracking->courier->sender_name}}</span> <br>
                                Sender Email: <span class="fs-16">{{$tracking->courier->sender_email}}</span> <br>
                                Sender Phone:<span class="fs-16">{{$tracking->courier->sender_phone}}</span> <br>
                                Sender Address:<span class="fs-16">{{$tracking->courier->sender_address}}</span> <br>
                            
                            </li>

                        </ul>
                    </div>
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