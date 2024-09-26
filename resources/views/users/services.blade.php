@extends('layouts.app')
@section('contents')
<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> Service</h2>
                        <p class="fs-16 no-margin"> </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>                                   
                        <li class="active">Services</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <div class="theme-container container">
        <div class="row">
            <div class="blog-wrap  pt-80 pb-50 clearfix">
                <section class="col-md-12 col-sm-8 pb-50">   
                    <div class="row">
                    <div class="col-md-7 col-sm-8 pb-50">               
                    <article class="post-wrap pb-50">
                        <div class="post-content">
                            <a class="title-1" href="#">{{$service->title}}</a>
                            <p>{!! $service->contents !!}</p>
                        </div>
                    </article>
                </div> 
                <div class="col-md-5 col-sm-8 pb-50">
                    <img alt="" src="{{asset('images/'.$service->images)}}"> 
                </div>
             
                </section>  

                <div class="visible-xs pad-30"></div>
                  
            </div>
        </div>
    </div>
    <!-- /.Blog -->

</article>

@endsection