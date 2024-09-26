<header class="header-main">
    <!-- Header Topbar -->
    <div class="top-bar font2-title1 white-clr">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <ul class="list-items fs-10">
                        <li class="active"><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-7 fs-12">
                    <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> {{$settings->site_phone}}</span>  &nbsp; &nbsp; <i class="fa fa-envelope"></i>  Email: <span class="theme-clr"> {{$settings->site_email}}</span> </p>
                </div>
            </div>
        </div>
        <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> Track Now </a>
    </div>
    <nav class="menu-bar font2-title1">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-logo" href="{{route('users.index')}}"> <img src="{{asset('/logo.png')}}" alt="logo"  width="130px"/> </a>
                </div>
                <div class="col-md-10 col-sm-10 fs-12">
                    <div id="navbar" class="collapse navbar-collapse no-pad">
                        <ul class="navbar-nav theme-menu">
                            <li class="dropdown active">
                                <a href="{{route('users.index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home </a>
                            </li>
                            <li> <a href="{{route('users.about-us')}}">About Us</a> </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Services</a>
                                <ul class="dropdown-menu">
                                    @forelse($site_services as $servie)
                                    <li><a href="{{route('users.services', encrypt($servie->id))}}">{{$servie->title}}</a></li>
                                    @empty 
                                    @endforelse                               
                                </ul>
                            </li>
                            <li> <a href="{{route('users.about-us')}}"> Contact Us </a> </li>
                            <li> <a href="{{route('users.blogs')}}"> Blogs</a> </li>
                        </ul>                                                      
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.Header Logo & Navigation -->

</header>