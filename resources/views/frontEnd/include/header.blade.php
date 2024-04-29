<header class="header-area header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-auto col-12">
                            <div class="top-left">
                                <ul>
                                    <li>
                                        <div class="top-left-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="top-left-content">
                                            <p>Call Us Today</p>
                                            <p>021 12312 - 127 12101</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-left-icon">
                                            <i class="zmdi zmdi-time"></i>
                                        </div>
                                        <div class="top-left-content">
                                            <p>Opening Hour</p>
                                            <p>Mon -Sat : 8:00 - 4:00</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-auto col-12">
                            <div class="top-right">
                                <div class="top-right-content">
                                    {{-- <a href="Sign-up.html" class="sign-btn sign-btn-m" role="button">Sign Up</a> --}}
                                    @if(!auth()->user())
                                     <a href="{{ route('login') }}" class="sign-btn" role="button">Sign In</a>
                                    @else
                                    <a href="{{ route('home') }}" class="sign-btn" role="button">Dashboard</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg col-12">
                        <div class="logo">
                            <a href="{{route('/')}}"><img class="img-width" src="https://curenew.vaccinehomebd.com/images/logo/logo.webp" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-auto col-12">
                        <div class="main-menu mean-menu text-end">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{route('/')}}">HOME</a></li>
                                    <li><a href="{{route('service')}}">Service</a></li>
                                    <li><a href="{{route('about')}}">ABOUT</a></li>
                                    <li><a href="{{route('team')}}">team</a></li>
                                    <li><a href="{{route('gallery')}}">gallery</a></li>
                                    <li><a href="{{route('blog')}}">blog</a>
                                        <ul>
                                            <li><a href="{{route('blog')}}">blog</a></li>
                                            <li><a href="{{route('blog_right_sidebar')}}">blog right sidebar</a></li>
                                            <li><a href="{{route('blog_details')}}">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </header>
