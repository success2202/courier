@extends('layouts.app')
@section('contents')

  <!-- Content Wrapper -->
  <article class="about-page"> 
	<!-- Breadcrumb -->
	<section class="theme-breadcrumb pad-50">                
		<div class="theme-container container ">  
			<div class="row">
				<div class="col-sm-8 pull-left">
					<div class="title-wrap">
						<h2 class="section-title no-margin" > About<span style="border-bottom: 2px solid #b7a30d"> us </span></h2>
						<p class="fs-16 no-margin"></p>
					</div>
				</div>
				<div class="col-sm-4">                        
					<ol class="breadcrumb-menubar list-inline">
						<li><a href="#" class="gray-clr">Home</a></li>                                   
						<li class="active">About</li>
					</ol>
				</div>  
			</div>
		</div>
	</section>
	<!-- /.Breadcrumb -->

	<!-- About Us -->
	<section class="pad-50 about-wrap">
		<span class="bg-text">  </span>
		<div class="theme-container container">               
			<div class="row">
				<div class="col-md-6">
					<div class="about-us pt-10">
						<p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
							{{$settings->site_name}} provides a portfolio of full logistic solutions in {{$settings->country}} which includes, but not limited to International and Domestic express delivery, Freight Forwarding, Integrated Logistics Solutions, Information and Document Management Solutions, Warehousing, Packaging Services.
						</p>
						<ul class="feature">
							<li> 
								<img alt="" src="" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
								<div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
									<p>{{$settings->site_name}} is a homegrown {{$settings->country}} logistics and distribution services company, founded in 2019. We are the among largest courier company in {{$settings->country}} and intend to become –in the near future– the go-to courier company in the continent</p>                                            
								</div>  
							</li>
							<li> 
								<img alt="" src="" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
								<div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
									
									<p>We offer a wide array of express, courier and logistic support solutions aimed at helping customers re-engineer and re-invent their businesses to compete successfully in an ever-changing marketplace, with the final objective of safely and promptly delivering all our customers consignments as expected</p>                                            
								</div>  
							</li>
							<li> 
								<img alt="" src="" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
								<div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
									
									<p>With staff strength of over 300 highly skilled personnel, we have excellent competencies in striving sectors such as Financial Services, Manufacturing, Telecommunications, Government Agencies, and Oil & Gas/Utilities</p>                                            
								</div>  
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 text-center">                                
					<img alt="" src="assets/img/block/about-img.png" class="effect animated fadeInRight" />
				</div>
			</div>
		</div>
	</section>
	<!-- /.About Us -->

	<!-- More About Us -->
	<section class="pad-30 more-about-wrap">
		<div class="theme-container container pb-100">               
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
					<div class="more-about clrbg-before">
						<h2 class="title-1">what we do</h2>
						<div class="pad-10"></div>
						<p>We are led by a team of first-rate managers—experts in their fields—who are given the freedom and authority to run their operations the way they know best. From top to bottom, we have assembled an elite team of employees, with numerous years of experience in the courier, freight and warehousing industries.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
					<div class="more-about clrbg-before">
						<h2 class="title-1">Our History</h2>
						<div class="pad-10"></div>
						<p> 
							CGG Courier Services is a homegrown logistics and distribution services company, founded in 2019. We are the among largest courier company in and intend to become –in the near future– the go-to courier company in the continent</p>
					</div>
				</div>
				<div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
					<div class="more-about clrbg-before">
						<h2 class="title-1">our mission</h2>
						<div class="pad-10"></div>
						<p>To create transportation solutions, build logistics partnerships, and drive value - one delivery at a time.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.More About Us -->
</article>
<!-- /.Content Wrapper -->

	
@endsection