@extends('layouts.app')
@section('contents')


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/12.jpg)">
    	<div class="auto-container">
        	<h2>About Us</h2>
			<div class="separater"></div>
        </div>
    </section>
	
	 <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="index.html">Home</a> <span>/</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="sec-title-two sec-title">
							<h2>VANGUSEM<span> Agencia Despachante</span></h2>
							<div class="separater"></div>
						</div>
						<ul class="list-style-one">
							<li><span>MISION: </span>Facilitar y mejorar de manera constante   las operaciones de Comercio Internacional, efectuar el control minucioso de las mercancías, brindar una atención integrada y puntual a las empresas, brindando siempre un servicio especializado,  personalizado, transparente permitiéndonos  forjar una relación comercial excelente.</li>
							<li><span>VISION: </span>Ser una Agencia Despachante  importante a nivel  Internacional,  que responde a las exigencias del Comercio Internacional  con una excelente y efectiva atención a las Empresas, integrando con  otros actores vinculados a las operaciones aduaneras,  bajo estándares  Internacionales, además de buscar innovación constante que faciliten  el Comercio Internacional.</li>
							
						</ul>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/welcome.jpg" alt="">
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
		
	
	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="auto-container">
			
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                </ul>
            </div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	
	
@endsection