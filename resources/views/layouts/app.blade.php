
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        </head>

<body class="hidden-bar-wrapper">

@include('partials.nav')
@yield('contents')
@include('partials.footer')
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<script src="process/jquery.min.js"></script>
	<script src="process/jquery.validate.js"></script>
	
<script>
	$.validator.setDefaults({
		submit: function() {
			alert("submitted!");
		}
	});

	$(document).ready(function() {
		$("#userForm").validate({
			rules: {
				name: "required",
				Consignment: {
					required: true,
					minlength: 13
				},
			   
			},
			messages: {
				name: "Please enter your name",           
				Consignment: {
						required: "Please enter a valid tracking number...",
						minlength: "Tracking ID must consist of at least 13 characters"
				},           
			}
		});
	});
	
	</script>
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
	});
	</script>
</body>

</html>
