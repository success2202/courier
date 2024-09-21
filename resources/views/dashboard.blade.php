@extends('layouts.app')
@section('contents')
	<!-- Banner Section Two -->
    <section class="banner-section-two" style="background-image:url(images/background/8.jpg)">
		<div class="auto-container">
			
			<!-- Content Column -->
			<div class="content-column">
				<div class="inner-column wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h1>WE DELIVER ON TIME </h1>
					<div class="text">Join the millions getting bargain deals on shipping cars, <br> furniture, freight, and more..</div>
					
					<!-- Banner Form -->
					<div class="banner-form-two wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<form method="post" action="track-result.php" name="form1" id="userForm" onSubmit="return validate()">
							<div class="row clearfix">
							
								<!-- Form Group -->
								<div class="form-group col-lg-2 col-md-2 col-sm-2">
									<input hidden >
								</div>
								
								<!-- Form Group -->
								<div class="form-group col-lg-4 col-md-6 col-sm-12">
									<input type="text" name="Consignment" placeholder="Enter Your Track ID" id="Consignment" required="">
								</div>
								
								<!-- Form Group -->
								<div class="form-group col-lg-4 col-md-12 col-sm-12">
									<button type="submit" id="send"  class="theme-btn btn-style-three">Track Now</button>
								</div>                                        
								
							</div>
						</form>
					</div>
					<!-- End Banner Form -->
					
				</div>
			</div>
				
		</div>
	</section>
	<!-- End Banner Section Two -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="outer-container">
			<div class="clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-air-freight"></span>
						</div>
						<h3><a href="#">Book Your Air Freight</a></h3>
						<div class="text">100% Secure Payment System</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-tow"></span>
						</div>
						<h3><a href="#">Book Your Road Freight</a></h3>
						<div class="text">100% Secure Payment System</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-boat"></span>
						</div>
						<h3><a href="#">Book Your Sea Freight</a></h3>
						<div class="text">100% Secure Payment System</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-train-1"></span>
						</div>
						<h3><a href="#">Book Your Train Freight</a></h3>
						<div class="text">100% Secure Payment System</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wowallow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="sec-title-two sec-title">
							<h2>Welcome <span>To Courieer</span></h2>
							<div class="separater"></div>
						</div>
						<ul class="list-style-one">
							<li><span>100% Safe Delivery</span>We have accomplished 100% safe delivery.</li>
							<li><span>Weather Insurance</span>Any weather any where, we deliver to your commitement.</li>
							<li><span>Fast & On Time Delivery</span>Fast and timly deliver is our motto.</li>
						</ul>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wowallow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/slide.jpg" width="500" height="50px" alt="">
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<div class="sec-title centered">
				<h3>Our Awesome <span> Services </span></h3>
				<div class="separater"></div>
			</div>
			<div class="row clearfix">
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-1.jpg" alt="">
							<h4>Air Freight</h4>
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-2.jpg" alt="">
							<h4>Sea Freight</h4>
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-3.jpg" alt="">
							<h4>Road Freight </h4>
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-4.jpg" alt="">
							<h4>Courier Services</h4>
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-5.jpg" alt="">
							<h4>Fast Freight </h4>
						</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-6.jpg" alt="">
							<h4>Track Cargo</h4>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url(images/background/3.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Order Column -->
				<div class="order-column col-lg-6 col-md-12 col-sm-12">
					
						 <img src="images/0.gif" width="500" height="400"> 
					
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="fact-counter">
							<div class="clearfix">
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="60">0</span>
											</div>
											<h4 class="counter-title">Years Experience</h4>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box alternate">
												<span class="count-text" data-speed="2800" data-stop="2500">0</span>+
											</div>
											<h4 class="counter-title">Professional Workers</h4>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="80">0</span>%
											</div>
											<h4 class="counter-title">Areas Covered</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="205">0</span>+
											</div>
											<h4 class="counter-title">Countries Covered</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="180">0</span>+
											</div>
											<h4 class="counter-title">Corporate Clients</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="450">0</span>+
											</div>
											<h4 class="counter-title">Owned Vehicles</h4>
										</div>
									</div>
								</div>
								
							</div>
						</div>

						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="team-section gap">
            <div class="auto-container">
			<div class="sec-title centered">
				<h3>Professional <span>Team</span></h3>
				<div class="separater"></div>
			</div>
			<div class="tem-sec">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="tm-bx">
							<div class="tm-thmb">
								<a href="#"><img src="images/clients/38.jpg" alt="Team-Image.jpg"></a>
								<div class="tm-inf">
									<h5><a href="#">Tim Patinson</a></h5>
									<span class="designation">Cargo Supervisor</span>
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-3 col-sm-6 col-lg-3">
						<div class="tm-bx">
							<div class="tm-thmb">
								<a href="#"><img src="images/clients/39.jpg" alt="Team-Image.jpg"></a>
								<div class="tm-inf">
									<h5><a href="#" title="">Jina Patinson</a></h5>
									<span class="designation">Shipping Manager</span>
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					 <div class="col-md-3 col-sm-6 col-lg-3">
						<div class="tm-bx">
							<div class="tm-thmb">
								<a href="#"><img src="images/clients/40.jpg" alt="Team-Image.jpg"></a>
								<div class="tm-inf">
									<h5><a href="#" title="">Mark Hustler</a></h5>
									<span class="designation">Tracking Dept</span>
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="tm-bx">
							<div class="tm-thmb">
								<a href="#"><img src="images/clients/41.jpg" alt="Team-Image.jpg"></a>
								<div class="tm-inf">
									<h5><a href="#" title="">John Doe</a></h5>
									<span class="designation">IT Technician</span>
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Team Sec -->
		</div>
    </section>
	
	
	
	<!-- Testimonial Section -->
	<section class="testimonial-section gap">
		<div class="auto-container">
			<div class="sec-title centered">
				<h3>Client <span>Testimonials</span></h3>
				<div class="separater"></div>
			</div>
			<div class="two-item-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Using it since 2005, best courier ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="images/resource/author-2.jpg" alt="">
								</div>
								<h4>William Jhon</h4>
								<div class="designation">Shipment Client</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Providing best services from last 20+ Years, trusted worldwide elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="images/resource/author-1.jpg" alt="">
								</div>
								<h4>Kristie Hans</h4>
								<div class="designation">Associated Engineer</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Used it once and never looked back, Totally awesome elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="images/resource/author-1.jpg" alt="">
								</div>
								<h4>Mylie Joseph</h4>
								<div class="designation">General Manager</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Tried first time in desperate need and it turns out great,  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="images/resource/author-2.jpg" alt="">
								</div>
								<h4>William Jhone k</h4>
								<div class="designation">General Manager</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<section class="fullwidth-section">
		<div class="outer-container">
			<div class="clearfix">
				
				<!-- Left Column -->
				<div class="left-column" style="background-image:url(images/background/5.jpg)">
					<div class="inner-column">
						<h3>Are You A Sender?</h3>
						<div class="text">We have multiple lucrative packages for the individual senders.</div><br>
						<a href="quote.php" class="theme-btn btn-style-one">Check Packages</a>
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column" style="background-image:url(images/background/6.jpg)">
					<div class="inner-column">
						<h3>Are You A Shipper?</h3>
						<div class="text">Lucrative incentives and facilities for large scale shipping consignments.</div>
						<a href="contact.php" class="theme-btn btn-style-two">Contact us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	

@endsection
