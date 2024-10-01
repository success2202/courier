@extends('layouts.app')
@section('contents')
    <!-- Content Wrapper -->
    <article> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> contact us </h2>
                            <p class="fs-16 no-margin"> Get in touch with us easily </p>
                        </div>
                    </div>
                    <div class="col-sm-4">                        
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>                                   
                            <li class="active">contact</li>
                        </ol>
                    </div>  
                </div>
            </div>
        </section>
        <section class="contact-page pad-30">                    
            <div class="theme-container container">               
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-1">
                        <ul class="contact-detail title-2 pt-50">
                            <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>Phone Number:</span> <p class="gray-clr"> {{$settings->site_phone}} </p> </li>
                            <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> {{$settings->site_email}} </p> </li>
                            <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Office address:</span> <p class="gray-clr"> {{$settings->address}} </p> </li>
                        </ul>
                    </div>

                    <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                        <div class="calculate-form">
                            <form class="row" id="contact-form" action="{{route('contact-us')}}" method="post">
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="Name" id="Name" required placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="Email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                    <div class="col-sm-9"> <input type="text" name="Phone" id="Phone" placeholder="" class="form-control"> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                    <div class="col-sm-9"> <textarea class="form-control" name="Message" id="Message" required cols="25" rows="3"></textarea> </div>
                                </div>
                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                    <div class="col-sm-9 col-xs-12 pull-right">
                                        <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="theme-container container">                                                 
        
            </div>
        </section>

    </article>


@endsection