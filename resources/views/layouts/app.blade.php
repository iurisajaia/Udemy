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



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Free Online Programming Courses - freeonlinecourses.me</title>
        <meta name="description" content="Download best online courses for free" />
        <meta name="robots" content="index, follow" />

        <meta name="og:title" property="og:title" content="freeonlinecourses.me - Free Online Courses"/>
        <meta name="title" content="Free Online Courses - freeonlinecourses.me" />






        <link rel="shortcut icon" type="image/png" href="{{URL::asset('img/logo/logo.png')}}" />
        
        <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css')}}>

        <link rel="stylesheet" href={{ URL::asset('revslider/css/settings.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/typography.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/style.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/responsive.css')}}>


    </head>
    <body>

            <!--Main Wrapper Start-->
            <div class="as-mainwrapper">
                <!--Bg White Start-->
                <div class="bg-white">
                    <!--Header Area Start-->

                    {{-- <header>
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
                                                        <li><a href="/templates">Templates</a></li>
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
                                                    <li><a href="/templates">Templates</a></li>
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
                    </header> --}}
                    <header id="main-header" class="header-one">

                        <nav id="menu-1" class="mega-menu" data-color="">
                    
                            <div class="menu-list-items">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
                    
                                            <ul class="menu-logo">
                                                <li>
                                                    <a href="/"><img src="{{URL::asset('images/logo.png')}}" alt="logo" class="img-fluid"></a>
                                                </li>
                                            </ul>
                    
                                            {{-- <ul class="menu-search-bar">
                                                <li>
                                                    <form method="post" action="#">
                                                        <label>
                                                            <input name="menu_search_bar" placeholder="Search" type="search">
                                                            <i class="fas fa-search"></i>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li class="menu-contact iq-fw-5"><a href="tel:0123456789"><i class="fas fa-phone pr-1 "></i> 0 123 456 789</a></li>
                                            </ul> --}}
                    
                                            <ul class="menu-links">
                    
                                                <li><a href="/" class="active">Home</a></li>
                                                <li><a href="/courses">Courses</a></li>
                                                <li><a href="/templates">Templates</a></li>
                                                <li><a href="/blog">Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    
                    </header>
                     <!--End of Header Area-->




                    {{-- Content --}}

                    @yield('content')

                    {{-- /Content --}}


                    <!--Footer Widget Area Start-->
                    {{-- <div class="footer-widget-area">
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
                    </div> --}}


                    <footer class="footer-one footer-bg  position-relative">
                        <img src={{URL::asset('images/footer/4.png')}} class="img-fluid fshap-after" alt="image">
                        
                        <div class="contactinfo">
                            <div class="container p-0">
                                <div class="row ">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="iq-footer-logo">
                                            <a href="index.html"><img src="images/footer/logo.png" class="img-fluid" alt="image"></a>
                                        </div>
                                        <div class="footer-copyright mb-4 iq-fw-5 mt-3">©Copyrights 2019 </div>
                                        <div>
                                            <div class="social-media d-inline-block float-left ml-4">
                                                <ul class="social">
                                                    <li><a href="https://www.facebook.com/bestonlinecoursesforfree" target="_blank"><i class="fab fa-facebook-f iq-fw-6"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 footer-link">
                                        <h5 class="iq-fw-7 riq-mt-40">Links</h5>
                                        <ul class="list-inline rmb-40">
                                            <li class="list-item"><a href="/">Home</a></li>
                                            <li class="list-item"><a href="/courses">Courses</a></li>
                                            <li class="list-item"><a href="/templates">Templates</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 footer-link">
                                        <h5 class="iq-fw-7 ">Information</h5>
                                        <ul class="list-inline">
                                            <li class="list-item"><a href="/about">About us</a></li>
                                            <li class="list-item"><a href="/terms-and-conditions">Terms & Conditions</a></li>
                                            <li class="list-item"><a href="/privacy-policy">Privacy Policy</a></li>
                                            <li class="list-item"><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="col-lg-4 col-md-6">
                                        <div class="testimonials">
                                            <div id="iqtestimonials" class="owl-carousel riq-mt-40" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="15">
                                                <div class="item">
                                                    <div class="desc">
                                                        <p class="mb-0">Progravida <span class="text-black iq-fw-7">#nibh vel velit auctor</span> alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,Lorem Ipsum. <a href="javascript:void(0)#" class="text-black iq-fw-7">https://iqonicthemes.com</a></p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="float-left d-flex mr-3">
                                                            <i class="fab fa-twitter text-white"></i>
                                                        </div>
                                                        <div class=" float-left ">
                                                            <div class="overview">
                                                                <a>
                                                                    <h6 class="name text-black mb-0">iqonicthemes</h6>
                                                                </a>
                                                                <div class="details">2 Months Ago</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="desc">
                                                        <p class="mb-0">Progravida <span class="text-black iq-fw-7">#nibh vel velit auctor</span> alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,Lorem Ipsum. <a href="javascript:void(0)" class="text-black iq-fw-7">https://iqonicthemes.com</a></p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="float-left d-flex mr-3">
                                                            <i class="fab fa-twitter text-white"></i>
                                                        </div>
                                                        <div class=" float-left ">
                                                            <div class="overview">
                                                                <h6 class="name text-black mb-0">iqonicthemes</h6>
                                                                <div class="details">2 Months Ago</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="desc">
                                                        <p class="mb-0">Progravida <span class="text-black iq-fw-7">#nibh vel velit auctor</span> alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,Lorem Ipsum. <a href="javascript:void(0)" class="text-black iq-fw-7">https://iqonicthemes.com</a></p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="float-left d-flex mr-3">
                                                            <i class="fab fa-twitter text-white"></i>
                                                        </div>
                                                        <div class=" float-left ">
                                                            <div class="overview">
                                                                <h6 class="name text-black mb-0">iqonicthemes</h6>
                                                                <div class="details">2 Months Ago</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    
                        <div id="back-to-top">
                            <a class="top" id="top" href="#top"><i class="ion-ios-arrow-thin-up"></i></a>
                        </div>
                    
                    </footer>

    <!--End of Footer Widget Area-->


            {{-- <script type="text/javascript" src=https://code.jquery.com/jquery-3.4.1.min.js></script> --}}
            {{-- <script type="text/javascript" src=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js></script> --}}
            <script data-cfasync="false" src="https://iqonicthemes.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-min.js"></script>

            <script src={{ URL::asset('js/popper.min.js')}}></script>
            
            <script src={{ URL::asset('js/bootstrap.min.js')}}></script>
            
            <script src={{ URL::asset('js/modernizr.js')}}></script>
            
            <script src={{ URL::asset('js/appear.min.js')}}></script>
            
            <script src={{ URL::asset('js/mega_menu.min.js')}}></script>
            
            <script src={{ URL::asset('js/timeline.js')}}></script>
            
            <script src={{ URL::asset('js/wow.min.js')}}></script>
            
            <script src={{ URL::asset('js/jquery.scrollme.min.js')}}></script>
            
            <script src={{ URL::asset('js/countdown.js')}}></script>
            
            <script src={{ URL::asset('js/waypoints.min.js')}}></script>
            
            <script src={{ URL::asset('js/jquery.counterup.min.js')}}></script>
            
            <script src={{ URL::asset('js/owl.carousel.min.js')}}></script>
            
            <script src={{ URL::asset('js/jquery.magnific-popup.min.js')}}></script>
            
            <script src={{ URL::asset('js/isotope.pkgd.min.js')}}></script>
            
            <script src={{ URL::asset('js/circle-progress.min.js')}}></script>
            
            <script src={{ URL::asset('js/canvasjs.min.js')}}></script>
            
            <script src={{ URL::asset('revslider/js/jquery.themepunch.tools.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/jquery.themepunch.revolution.min.js')}}></script>
            
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.actions.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.carousel.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.kenburn.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.layeranimation.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.migration.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.navigation.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.parallax.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.slideanims.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/extensions/revolution.extension.video.min.js')}}></script>
            
            <script src={{ URL::asset('revslider/js/revolution.tools.min.js')}}></script>
            <script src={{ URL::asset('revslider/js/rs6.min.js')}}></script>
            
            <script src={{ URL::asset('js/retina.min.js')}}></script>
            
            <script src={{ URL::asset('js/custom.js')}}></script>
            <script>
                           
                           var   revapi7,
                              tpj;
                           jQuery(function() {
                              tpj = jQuery;
                              if(tpj("#rev_slider_7_1").revolution == undefined){
                                 revslider_showDoubleJqueryError("#rev_slider_7_1");
                              }else{
                                 revapi7 = tpj("#rev_slider_7_1").show().revolution({
                                    jsFileLocation:"js/",
                                    sliderLayout:"fullwidth",
                                    visibilityLevels:"1240,1024,778,480",
                                    gridwidth:1240,
                                    gridheight:900,
                                    minHeight:"",
                                    spinner:"spinner0",
                                    editorheight:"900,768,960,720",
                                    responsiveLevels:"1240,1024,778,480",
                                    disableProgressBar:"on",
                                    navigation: {
                                       onHoverStop:false
                                    },
                                    fallbacks: {
                                       allowHTML5AutoPlayOnAndroid:true
                                    },
                                 });
                              }
                              
                           });
                        </script>
        </body>
</html>
