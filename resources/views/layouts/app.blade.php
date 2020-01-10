<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Fontawsome CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/font-awesome.min.css')}}>

        		<!-- Metarial Iconic Font CSS
        		============================================ -->

                <!-- Bootstrap CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css')}}>

        		<!-- Plugins CSS
        		============================================ -->
                <link rel="stylesheet" href={{ URL::asset('css/plugins.css')}}>

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
                    @if (!Request::is(['home' ,'login'])) 
                       
                    <header>
                        <div class="header-logo-menu sticker">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <div class="logo">
                                            <a href="index.html"><img src="img/logo/logo.png" alt="EDUCAT"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-12">
                                        <div class="mainmenu-area pull-right">
                                            <div class="mainmenu d-none d-lg-block">
                                                <nav>
                                                    <ul id="nav">
                                                        <li class="current"><a href="/">Home</a></li>
                                                        <li><a href="/about">About</a></li>
                                                        <li><a href="/courses">Courses</a></li>
                                                        <li><a href="/contact">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <ul class="header-search">
                                                <li class="search-menu">
                                                    <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                                </li>
                                            </ul>
                                            <!--Search Form-->
                                            <div class="search">
                                                <div class="search-form">
                                                    <form id="search-form" action="#">
                                                        <input type="search" placeholder="Search here..." name="search" />
                                                        <button type="submit">
                                                            <span><i class="fa fa-search"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--End of Search Form-->
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
                
                    @endif



                    {{-- Content --}}

                    @yield('content')

                    {{-- /Content --}}


                    @if (!Request::is(['home' ,'login'])) 
                    <!--Footer Widget Area Start-->
                    <div class="footer-widget-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-footer-widget">
                                        <div class="footer-logo">
                                            <a href="index.html"><img src="img/logo/footer.png" alt=""></a>
                                        </div>
                                        <p>There are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem, </p>
                                        <div class="social-icons">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-footer-widget">
                                        <h3>GET IN TOUCH</h3>
                                        <a href="tel:555-555-1212"><i class="fa fa-phone"></i>555-555-1212</a>
                                        <span><i class="fa fa-envelope"></i>info@example.com</span>
                                        <span><i class="fa fa-globe"></i>www.educat.com</span>
                                        <span><i class="fa fa-map-marker"></i>ur address goes here,street.</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
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
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-footer-widget">
                                        <h3>Instagram</h3>
                                        <div class="instagram-image">
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/1.jpg" alt=""></a>
                                            </div>
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/2.jpg" alt=""></a>
                                            </div>
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/3.jpg" alt=""></a>
                                            </div>
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/4.jpg" alt=""></a>
                                            </div>
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/5.jpg" alt=""></a>
                                            </div>
                                            <div class="footer-img">
                                                <a href="#"><img src="img/footer/6.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

    <!--End of Footer Widget Area-->


            <script type="text/javascript" src={{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}></script>
                <script type="text/javascript" src={{ URL::asset('js/bootstrap.min.js')}}></script>

     		<!-- jquery
//     		============================================ -->

        </body>
</html>
