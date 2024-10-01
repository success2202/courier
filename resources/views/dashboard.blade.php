@extends('layouts.app')
@section('contents')
            <article> 
                <!-- Banner -->
                <section class="banner mask-overlay pad-120 white-clr" style="background: url({{asset('images/'.$sliders[0]->image)}}); background-repeat:no-repeat; background-size:cover" >
                    @forelse($sliders as $slider)
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                    <div class="container theme-container rel-div">
                        <img class="pt-10 effect animated fadeInLeft" alt="" src="{{$slider->image}}" />
                        <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">   
                            <li><a href="#">fast</a></li>
                            <li><a href="#">secured</a></li>
                            <li><a href="#">worldwide</a></li>
                        </ul>
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> {{$slider->title}} <br>
                             <span class="theme-clr"> {{$slider->content}} </span> </h2>
                    </div>
                    <div class="pad-50 visible-lg"></div>
                        </div>
                    </div>
                    @empty 
                    @endforelse
                </section>
                <!-- /.Banner -->

                <!-- Track Product -->
                <section>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">     
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="" action="{{route('users.courier.index')}}" method="post">
                                        @csrf
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" name="constNo" placeholder="Enter your tracking Id" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </section>
                <!-- /.Track Product -->

                {{-- ------------ our services --------------- --}}
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> </span>
                    <div class="theme-container container">               
                        <div class="row">
                            {{-- <h3 class="section-title" style="color:#00000086">Our Services</h3> --}}
                            @forelse($services as $service)
                            <div class="col-md-3">
                                <div class="about-us pt-3">
                                    <img src="{{asset('images/'.$service->images)}}" alt="" style="width: 200px; height:130px">
                                    <h5 class="sectiitle pb-5 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" style="font-size: 20px; color:#000000"> {{$service->title}} </h5>
                                    <p class="fs-16 wow fadeInUp " data-wow-offset="50" data-wow-delay=".25s" style="color:#000000a4; text-align:justify">
                                   {!! $service->brief !!} <a href="{{route('users.services', encrypt($service->id))}}" class="btn btn-warning"> Learn More</a> </p>
                                </div>
                             
                            </div>
                            @empty 
                            @endforelse
                        </div>
                    </div>
                </section>


                <!-- About Us -->
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us">
                                    <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                                    <p class="fs-16 wow fadeInUp " data-wow-offset="50" data-wow-delay=".25s" style="color:#000000a4">
                                     {{$settings->site_name}} offers comprehensive logistics services to companies and organizations around the globe.
                                     We have the infrastructure to provide your demanding ground logistics solutions from coast to coast.  The combined bandwidth of our Logistics division with a footprint in more than 10 countries, offers you a network of national resources. 
                                    We believe you deserve a seamless experience, wherever your deliveries are going. </p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast delivery</h2> 
                                                <p>We ensure that your orders arrive quickly and efficiently. We understand that time is of the essence, and our goal is to provide a seamless experience from the moment you place your order to the moment it arrives at your doorstep.</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">secured service</h2> 
                                                <p>We also ensure that every step of the process is safeguarded. Your trust is our priority, and we’re committed to delivering your orders not only quickly but securely. </p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">worldwide shipping</h2> 
                                                <p>Bringing your products to customers around the globe. No matter where you are, our efficient and reliable shipping services ensure that your orders reach your customers quickly and securely.</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="pb-80 visible-lg"></div>
                                <img alt="" src="{{asset('/assets/img/block/about-img.png')}}" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">                
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                {{-- <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>  --}}
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">12k+</h2> 
                                    <p class="gray-clr">Parcels Distributed in 2023</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                {{-- <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>  --}}
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">500+ </h2> 
                                    <p class="gray-clr">Vehicles Operated Per Day</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                {{-- <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>  --}}
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">10k +</h2> 
                                    <p class="gray-clr">Square Feet of Warehouse Space</p>                                            
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-50">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                       {{$settings->site_name}} has been an industry leader in specialized <br>delivery services for over 5 years. 
                                        We have the infrastructure   to provide <br> your demanding ground  logistics solutionsfrom coast to coast. </p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="assets/img/block/delivery.png" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s pad-80" style="background: #eee">                
                    <div class="theme-container container">               
                        <div class="row"> 
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 
                                   <img src="{{asset('/assets/1200px-FedEx_Express.svg_-165x120.png')}}">
                                </div> 

                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 
                                    <img src="{{asset('/assets/acw-logo-165x120.jpg')}}">
                                </div> 
                                
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 
                                    <img src="{{asset('/assets/asadaadsa.jpg')}}">
                                </div> 
                                
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 
                                    <img src="{{asset('/assets/ddd-165x120.jpg')}}">
                                </div> 
                                
                            </div>
                        </div>
                    </div>

                </section>
                <section class="testimonial mask-overlay">
                    <div class="theme-container container">               
                        <div class="testimonial-slider no-pagination pad-120 owl-carousel owl-theme owl-loaded">
                        @forelse($testimonials as  $test)
                            <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-5850px, 0px, 0px); transition: 0.25s; width: 8190px;">
                                <div class="owl-item cloned" style="width: 1170px; margin-right: 0px;">
                                    <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2">
                                    <img alt="" src="{{asset('assets/user.png')}}">
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>  <i class="gray-clr fs-16">
                                           {{$test->content}}
                                        </i> </p>
                                    <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900">{{$test->name}} </a> </h2>
                                </div>
                            </div>
                        </div>
                          </div>
                        </div>
                        @empty 
                        @endforelse
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="">
                                    <i class="fa fa-angle-left"></i>
                                </div><div class="owl-next" style="">
                                    <i class="fa fa-angle-right"></i></div></div>
                                    <div class="owl-dots" style="display: block;">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div><div class="owl-dot"><span>
                                            </span></div></div></div></div>
                    </div>
                </section>
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> </span>
                    <div class="theme-container container">               
                        <div class="row">
                          
                            <h3 class="pb-5" style="color:#00000086; font-size:24px; border-bottom:2px solid #00000025" >Our Blogs</h3>
                            @forelse($blogs as $blog)
                            <div class="col-md-4">
                                <div class="about-us pt-3">
                                    <a href="{{route('users.blog.details', encrypt($blog->id))}}">
                                    <img src="{{asset('images/'.$blog->image)}}" alt="" style="width: 300px; height:150px">
                                    <h5 class="sectiitle pb-5 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" style="font-size: 20px; color:#000000"> {{$blog->title}} </h5>
                                    <p class="fs-16 wow fadeInUp " data-wow-offset="50" data-wow-delay=".25s" style="color:#000000a4; text-align:justify">
                                   {!! substr($service->contents,0,100) !!}   <span style="color:blue"> Read more... </span> </p>
                                </a>
                                </div>
                             
                            </div>
                       
                            @empty 
                            @endforelse
                        </div>
                    </div>
                </section>

            </article>

@endsection
