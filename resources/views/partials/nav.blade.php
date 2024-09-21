
<div class="page-wrapper">
    <div class="preloader"></div>
    <header class="main-header header-style-two">
		<div class="auto-container">
			<div class="header-inner">
				<!--Header Top-->
				<div class="header-top">
					<div class="clearfix">
						<div class="top-right">
							<ul class="right-list">
								<li><span class="icon flaticon-mail"></span>{{$settings->site_email}}</li>
								<li><span class="icon flaticon-phone-contact"></span>{{$settings->site_phone}}</li>
							</ul>
							<div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="globe flaticon-world"></span>{{$settings->country}}</a>
								
							</div>
							<ul class="social-box">
								<li>
						<div id="google_translate_element"></div>

                            <script type="text/javascript">
                            function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                            }
                            </script>

                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                            
								</li>
							</ul>
							
						</div>
						
					</div>
					
				</div>
			
				<!--Header-Upper-->
				<div class="header-upper">
					
					<div class="clearfix">
						
						<div class="pull-left logo-box">
							<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
						</div>
						
						<div class="pull-right upper-right">
							
							<!--Header Lower-->
							<div class="header-lower">
								
								
									<div class="nav-outer clearfix">
										<!-- Main Menu -->
										<nav class="main-menu navbar-expand-md">
											<div class="navbar-header">
												<!-- Toggle Button -->    	
												<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											
											<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
												<ul class="navigation clearfix">
													<li class="current"><a href="{{route('users.index')}}">Home</a></li>
													<li><a href="{{route('users.about-us')}}">About Us</a></li>
													<li><a href="services.html">Our Services</a></li>
													<li><a href="quote.php">Get Quote</a></li>
													<li><a href="track.html">Track your shippment</a></li>
													
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
											</div>
										</nav>
										
										<!-- Main Menu End-->
										<div class="outer-box clearfix">
										
											<!--Option Box-->
											<div class="option-box">
												
												<!--Search Box-->
												<div class="search-box-outer">
													<div class="dropdown">
														<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-route"></span></button>
														<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
															<li class="panel-outer">
																<div class="form-container">
																	<form method="post" action="track-result.php" method="post" name="form1" id="userForm" onSubmit="return validate()">
																		<div class="form-group">
																			<input type="search" name="Consignment" id="Consignment" value="" placeholder="Track Your Shipment" required="">
																			<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								
							</div>
							<!--End Header Lower-->
							
						</div>
						
					</div>
					
				</div>
			<!--End Header Upper-->
			</div>
        </div>
		
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small-2.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
													<li class="current"><a href="index.html">Home</a></li>
													<li><a href="about.html">About Us</a></li>
													<li><a href="services.html">Our Services</a></li>
													<li><a href="quote.php">Get Quote</a></li>
													<li><a href="track.html">Track your shippment</a></li>
													
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->