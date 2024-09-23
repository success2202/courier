@extends('layouts.app')
@section('contents')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/12.jpg)">
    <div class="auto-container">
        <h2>Contact Us</h2>
        <div class="separater"></div>
    </div>
</section>

 <!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="index.html">Home</a> <span>/</span></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!--End Page Title-->

<!-- Contact Section -->
<section class="quote-section">
    <div class="auto-container">
        <div class="quote-form-box contact-page">
            <div class="sec-title centered">
                <h3>Get in touch<span> with us</span></h3>
                <div class="separater"></div>
                <div class="text">We value your comments and suggestions</div>
            </div>
            <!-- Form-->
            <form class="contact-form" action="contactform.php" method="post">
                <div class="row clearfix">
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required="">
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="email" name="mail" id="mail" placeholder="Email Address" required="">
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="text" name="phone" id="phone" placeholder="Telephone" required="">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-lg-12">
                        <textarea placeholder="message" id="comments" name="message"></textarea>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <button type="submit" name="submit" class="theme-btn btn-style-one">Send Message</button>
                        
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End contact Section -->
</div>



@endsection