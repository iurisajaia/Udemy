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
        <script data-ad-client="ca-pub-8724175326124727" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Free Online Programming Courses - freeonlinecourses.me</title>

        <meta name="description" content="Download best online courses for free" />

        <meta name="robots" content="index, follow" />

        <meta name="og:title" property="og:title" content="freeonlinecourses.me - Free Online Courses"/>

        <meta name="title" content="Free Online Courses - freeonlinecourses.me" />

        <link rel="shortcut icon" type="image/png" href="{{URL::asset('images/logo.png')}}" />

        <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/typography.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/style.css')}}>

        <link rel="stylesheet" href={{ URL::asset('css/responsive.css')}}>

        <script>

            function init() {
                document.getElementById('reloadButton').addEventListener('click' , () => {
                    location.reload();
                })
                let adsBlockedElement = document.getElementById('ads-blocked');
                adsBlocked(function (o) {
                    o
                        ? adsBlockedElement.classList.remove('hidden')
                        : console.log("Ad-blocker Enabled : " + o);
                });
            }
            function adsBlocked(o) {
                var e = new Request(
                    "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js",
                    { method: "HEAD", mode: "no-cors" }
                );
                fetch(e)
                    .then(function (o) {
                        return o;
                    })
                    .then(function (e) {
                        console.log(e), o(!1);
                    })
                    .catch(function (e) {
                        console.log(e), o(!0);
                    });
            }
            // setTimeout(() => {
            //     init();
            // }, 3000);


        </script>

    </head>
    <body>

    <div class='adblock-wrapper center hidden' id='ads-blocked'>
        <div class='adblock-content-wrapper'>
            <div class='adblock-content'>
                <div class='center'>
                    <div class='image-container'>
                        <div class='image'>
                            <i class="fas fa-exclamation-circle"></i>
                            <h3>
                                Ads
                            </h3>
                        </div>
                    </div>
                </div>
                <div class='adblock-text'>
                    <h3>
                        Please disable your ad blocker!
                    </h3>
                    <p>
                        We know ads are annoying but please bear with us here & disable your ad blocker!
                    </p>
                </div>
                <div class='adblock-button'>
                    <button class='btn' id="reloadButton">
                        I've disabled my ad blocker!
                    </button>
                </div>
            </div>
        </div>
    </div>
            <!--Main Wrapper Start-->
            <div class="as-mainwrapper">
                <!--Bg White Start-->
                <div class="bg-white">
                    <!--Header Area Start-->
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

                                            <ul class="menu-search-bar pull-right active">
                                                <ul class="menu-links">
                                                    @if(Auth::user())
                                                        <li><a href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a></li>
                                                        <li><a href="/logout">Log Out</a></li>
                                                    @else
                                                        <li><a href="/login" class="{{Request::is('login') ? 'active' : ''}}">Login</a></li>
                                                        <li><a href="/register" class="{{Request::is('register') ? 'active' : ''}}">Register</a></li>
                                                    @endif
                                                </ul>
                                            </ul>

                                            <ul class="menu-links">

                                                <li><a href="/" class="{{Request::is('/') ? 'active' : ''}}">Home</a></li>
                                                <li><a href="/courses" class="{{Request::is('courses') ? 'active' : ''}}">Courses</a></li>
                                                <li><a href="/templates" class="{{Request::is('templates') ? 'active' : ''}}">Templates</a></li>
{{--                                                <li><a href="/blog" class="{{Request::is('blog') ? 'active' : ''}}">Blog</a></li>--}}
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
                    <footer class="footer-one footer-bg  position-relative">
                        <img src={{URL::asset('images/footer/4.png')}} class="img-fluid fshap-after" alt="image">

                        <div class="contactinfo">
                            <div class="container p-0">
                                <div class="row ">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="iq-footer-logo">
                                            <a href="index.html"><img src="{{URL::asset('images/logo.png')}}" class="img-fluid" alt="image"></a>
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
                                </div>
                            </div>
                        </div>
                    </footer>

                    <script src={{URL::asset('js/custom.js')}} ></script>
        </body>
</html>
