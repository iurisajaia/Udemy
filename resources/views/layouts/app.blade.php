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

            @include('components.adblocker')


            <div class="as-mainwrapper">
                <div class="bg-white">

                    @include('partials.header')


                    @yield('content')


                    @include('partials.footer')

                </div>
            </div>

    <script src={{URL::asset('js/custom.js')}} ></script>

    </body>
</html>
