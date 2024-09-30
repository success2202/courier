  <!-- Footer -->
  <footer>
    <div class="footer-main pad-120 white-clr">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-widget">
                    <a href="#"> <img class="logo" alt="#" src="{{asset('assets/'.$settings->logo)}}" width="100px" />  </a>
                    <br> <p>{{$settings->about}} </p>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">quick links</h2>
                    <ul>
                        <li><a href="{{route('users.index')}}"> Home </a> </li>
                        <li><a href="{{route('users.blogs')}}"> Blogs</a> </li>
                        <li><a href="{{route('users.about-us')}}">About Us</a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">Our Services</h2>
                    <ul>
                            @forelse($site_services as $servie)
                            <li><a href="{{route('users.services', encrypt($servie->id))}}">{{$servie->title}}</a></li>
                            @empty 
                            @endforelse 
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">get in touch</h2>
                    <ul class="social-icons list-inline">
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="{{$settings->facebook}}" class="fa fa-facebook"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="{{$settings->twitter}}" class="fa fa-twitter"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="{{$settings->instagram}}" class="fa fa-instagram"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="{{$settings->linkedin}}" class="fa fa-linkedin"></a> </li>
                    </ul>
                    <ul class="payment-icons list-inline">
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p> {{$settings->copyright}}</p>                            
                </div>
            </div>
        </div>
    </div>
</footer>
</main>
<div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>
