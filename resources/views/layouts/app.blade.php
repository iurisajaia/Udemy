<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
    <title>@isset( $seo ){{$seo["title"]}}@endif</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="@isset( $seo ){{$seo["title"]}}@endif" name="title" />
    <meta content="@isset( $seo ){{$seo["description"]}}@endif" name="description" />
    

    <meta content="@isset( $seo ){{$seo["title"]}}@endif" property="og:title" />
    <meta content="@isset( $seo ){{$seo["description"]}}@endif" property="og:description" />

    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="FreeOnlineCourses.me"/>
    <meta content="FreeOnlineCourses.me" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="@isset( $seo ){{@$seo["canonical"]}}@endif"/>

    <meta name="keywoards" 
        content="
        online classes , 
        free online courses , 
        online courses , 
        online degrees, 
        tutorial , 
        javascript tutorial,
        python tutorial,
        angular tutorial,
        java tutorial,
        photoshop tutorial,
        react tutorial,
        docker tutorial,
        node js tutorial,
        php tutorial,
        laravel tutorial
        " 
        />
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156256604-1"></script>
<script defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156256604-1');
</script>

        
{{--     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Free Online Courses - freeonlinecourses.me</title>
        <meta name="description" content="Download best online courses for free" />
        <meta name="robots" content="index, follow" />
        
        <meta name="og:title" property="og:title" content="freeonlinecourses.me - Free Online Courses"/>
        <meta name="title" content="Free Online Courses - freeonlinecourses.me" /> --}}





        
        <link rel="shortcut icon" type="image/png" href="{{URL::asset('img/logo/logo.png')}}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Fontawsome CSS
            
                ============================================ -->
                <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Roboto+Condensed&display=swap" rel="stylesheet">


                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

                <!-- Bootstrap CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css')}}>

        		<!-- Style CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/style.css')}}>

        		<!-- Color CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/color.css')}}>

        		<!-- Responsive CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/responsive.css')}}>

        		<!-- Modernizr JS
        		============================================ -->


    </head>
    <body>

            <!--Main Wrapper Start-->
            <div class="as-mainwrapper">
                <!--Bg White Start-->
                <div class="bg-white">
                    <!--Header Area Start-->
                       
                    <header>
                        <div class="header-logo-menu sticker">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <div class="logo">
                                        <a href="/">
                                            <img src="{{URL::asset('img/logo/logo.png')}}" alt="Free Online Courses" title="Free Online Courses">
                                        </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-12">
                                        <div class="mainmenu-area pull-right text-right">
                                            <div class="mainmenu d-none d-lg-block">
                                                <nav>
                                                    <ul id="nav">
                                                        <li class="current"><a href="/">Home</a></li>
                                                        <li><a href="/about">About</a></li>
                                                        <li><a href="/courses">Courses</a></li>
                                                        <li><a href="/contact">Contact</a></li>

                                                        @if(Auth::user() and Auth::user()->isAdmin())
                                                            <li><a href="/home">Dahboard</a></li>
                                                        @endif
                                                        @if(Auth::user())
                                                        <li><a href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a></li>
                                                        <li>
                                                            <form action="/logout" method="POST">
                                                                @csrf
                                                                <button class="btn btn-info">Log Out</button>
                                                            </form>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <a href="/login">Login</a>
                                                        @endif
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area start -->
                        <div class="mobile-menu-area">
                            <div class="container clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="mobile-menu">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="/">HOME</a></li>
                                                    <li><a href="/about">About Us</a></li>
                                                    <li><a href="/courses">Courses</a></li>
                                                    <li><a href="/contact">Contact us</a></li>
                                                    @if(Auth::user() and Auth::user()->isAdmin())
                                                            <li><a href="/home">Dahboard</a></li>
                                                        @endif
                                                        @if(Auth::user())
                                                        <li><a href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a></li>
                                                        <li>
                                                            <form action="/logout" method="POST">
                                                                @csrf
                                                                <button class="btn btn-info">Log Out</button>
                                                            </form>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <a href="/login">Login</a>
                                                        @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area end -->
                    </header>
                    <!--End of Header Area-->
                



                    {{-- Content --}}

                    @yield('content')

                    {{-- /Content --}}


                    <!--Footer Widget Area Start-->
                    <div class="footer-widget-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-footer-widget">
                                        <div class="footer-logo">
                                            <a href="/">
                                                <img src="{{ URL::asset('img/logo/footer.png')}}" alt="Free Online Courses" title="Free Online Courses">
                                            </a>
                                        </div>
                                        <p>Download your favourite courses for free</p>
                                        {{-- <div class="social-icons"> --}}
                                            {{-- <a href="#"><i class="fa fa-facebook"></i></a> --}}
                                            {{-- <a href="#"><i class="fa fa-google-plus"></i></a> --}}
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-footer-widget">
                                        <h3>GET IN TOUCH</h3>
                                        <a href="tel:555-555-1212"><i class="fa fa-phone"></i>+995-598-29-79-61</a>
                                        <a href="support@freeonlinecourses.me"><i class="fa fa-envelope"></i>support@freeonlinecourses.me</a>
                                        <a href="https://www.facebook.com/bestonlinecoursesforfree"><i class="fa fa-facebook"></i>@bestonlinecoursesforfree</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="footer-list">
                                            <li><a href="/courses">Our Courses</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    <!--End of Footer Widget Area-->


            <script type="text/javascript" src=https://code.jquery.com/jquery-3.4.1.min.js></script>
            <script type="text/javascript" src=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js></script>
                    
        </body>
</html>
