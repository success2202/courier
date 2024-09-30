<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="We provide reliable courier services with same-day and express shipping options. Affordable, nationwide coverage with fast and secure deliveries for businesses and individuals.">

    <!-- Meta Keywords -->
    <meta name="keywords" content="courier services, same-day delivery, express shipping, nationwide delivery, fast courier service, reliable courier, package delivery, parcel delivery, affordable shipping">
    <!-- Viewport for Mobile Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph for Social Media Sharing -->
    <meta property="og:title" content="Fast & Reliable Courier Services | Same-Day Delivery & Express Shipping">
    <meta property="og:description" content="We provide reliable courier services with same-day and express shipping options. Affordable, nationwide coverage with fast and secure deliveries for businesses and individuals.">
    <meta property="og:image" content="https://cggcourier.com/"> <!-- Replace with the actual image URL -->
    <meta property="og:url" content="https://cggcourier.com/"> <!-- Replace with the actual URL -->
    <meta property="og:type" content="cggcourier.com">

    <title>{{ config('app.name', 'Cggcourier') }}</title>
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="{{asset('/images/fav.png')}}" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"
     href="{{asset('/assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/font-elegant/elegant.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/theme.css')}}">

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.js"></script>
    <![endif]-->
</head>
<body id="home">
	{{-- <div id="preloader">
		<div class="small1">
			<div class="small ball smallball1"></div>
			<div class="small ball smallball2"></div>
			<div class="small ball smallball3"></div>
			<div class="small ball smallball4"></div>
		</div>
		<div class="small2">
			<div class="small ball smallball5"></div>
			<div class="small ball smallball6"></div>
			<div class="small ball smallball7"></div>
			<div class="small ball smallball8"></div>
		</div>
		<div class="bigcon">
			<div class="big ball"></div>
		</div>
	</div>	 --}}
	       <!-- Main Wrapper -->        
		   <main class="wrapper">

            <!-- Header -->

    @include('layouts.nav')
    @yield('contents')
    @include('layouts.footer')
   

	<script src="{{asset('/assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>        
	<script src="{{asset('/assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>    
	<script src="{{asset('/assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>    
	<script src="{{asset('/assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>   
	<script src="{{asset('/assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('/assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/js/theme.js')}}" type="text/javascript"></script>

	@yield('script')
	</body>
	</html>