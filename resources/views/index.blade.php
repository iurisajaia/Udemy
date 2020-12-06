@extends('layouts.app')
@section('content')

    <!--Slider Area Start-->

    <div class="slider-area">
        <div class="preview-2">
            <div id="nivoslider" class="slides">
            </div>
            <div class="slider-overlay text-center">
            <img src="{{URL::asset('revslider/assets/5.png')}}" title="free programming online courses" class="rocket-image">
            <div class="over-slider-text">
                <h1>Free Online Programming Courses</h1>
                <h2>Start Your Career Today </h2>
            </div>
            </div>
        </div>
    </div>
    <!--End of Slider Area-->
    <div class="main-content">

        <section class="iq-works position-relative no-bg overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="section-title">
                            <p class="mt-2 text-uppercase iq-fw-3 iq-ls-3">Three Easy Steps</p>
                            <h2 class="title iq-fw-8">How You Can Get More Knowledge</h2>
                        </div>
                    </div>
                </div>
                <div class="row position-relative no-gutters">
                    <div class="col-lg-4">
                        <div class="iq-work first-line">
                            <div class="work-content">
                                <div class="iq-work-id  text-center">1</div>
                                <div class="iq-work-detail text-center ">
                                    <img src="images/work/3.png" class="img-fluid mb-4" alt="image">
                                    <h3 class="title iq-fw-8">Find</h3>
                                    <p class="mt-2 mb-0">Find your favourite course easely</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-work">
                            <div class="work-content">
                                <div class="iq-work-id  text-center">2</div>
                                <div class="iq-work-detail text-center ">
                                    <img src="images/work/4.png" class="img-fluid mb-4" alt="image">
                                    <h3 class="title iq-fw-8">Download</h3>
                                    <p class="mt-2 mb-0">Download chosen course with just a click</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="iq-work last-line">
                            <div class="work-content">
                                <div class="iq-work-id  text-center">3</div>
                                <div class="iq-work-detail text-center ">
                                    <img src="images/work/5.png" class="img-fluid mb-4" alt="image">
                                    <h3 class="title iq-fw-8">Enjoy</h3>
                                    <p class="mt-2 mb-0">Now you can start learning something new</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="iq-blogs position-relative overview-block-pb  iq-rmt-40">
            <div class="scrollme">
                <img src="images/shap/02.png" class="img-fluid project-overlay-right animateme" data-when="enter" data-from="0.5" data-to="0" data-translatey="100" alt="image">
            </div>
            <div class="container">
                <div class="col-sm-12 text-center">
                    <div class="section-title">
                        <h2>Latest Courses</h2>
                        <a href="/courses" class="mb-0 text-uppercase iq-fw-5 iq-ls-2">See All</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                        @foreach($courses as $course)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="item">
                                <div class="main-blog">
                                    <div class="blog-img">
                                        <img src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}" class="img-fluid" >
                                    </div>
                                    <div class="blog-detail">
                                        <a class="main-color iq-fw-8" href="/course/{{str_slug($course->title)}}/{{$course->id}}">{{$course->category->title}}</a>
                                        <a href="/course/{{str_slug($course->title)}}/{{$course->id}}">
                                            <h5 class="mt-1 iq-fw-8">{{$course->title}}</h5>
                                        </a>
                                        <div class="blog-info">
                                            <ul class="d-inline-block float-right">
                                                <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">{{count($course->comments)}}</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </section>

        <section class="team-aria">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="section-title">
                            <p class="mb-0 text-uppercase iq-fw-5 iq-ls-3">Meet the Team</p>
                            <h2 class="title iq-fw-8">Our Best Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-three">
                            <div class="team-bg">
                                <img class="img-fluid" src="images/team/team-two/1.png" alt="image">
                                <div class="social-box">
                                    <a href="https://www.facebook.com/dexter.munich/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/DexterSja" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/iuri-sajaia-b41245188/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h5><a href="team-detail.html">Iuri Sajaia</a></h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-three">
                            <div class="team-bg">
                                <img class="img-fluid" src="images/team/team-two/2.png" alt="image">
                                <div class="social-box">
                                    <a href="https://www.facebook.com/dexter.munich/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/DexterSja" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/iuri-sajaia-b41245188/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h5><a href="team-detail.html">Iuri Sajaia</a></h5>
                                <p>Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-three">
                            <div class="team-bg">
                                <img class="img-fluid" src="images/team/team-two/3.png" alt="image">
                                <div class="social-box">
                                    <a href="https://www.facebook.com/dexter.munich/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/DexterSja" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/in/iuri-sajaia-b41245188/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h5><a href="team-detail.html">Iuri Sajaia</a></h5>
                                <p>Copywriter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!--Course Area Start-->
    {{-- <div class="course-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Latest Courses</h3>
                            <p>Download your favourite courses for free</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 col-12 mb-5 mt-5">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/course/{{str_slug($course->title)}}/{{$course->id}}"><img src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}"></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/course/{{str_slug($course->title)}}/{{$course->id}}">{{$course->title}}</a></h4>
                            <div class="single-item-text-info">
                                <span>By: <span>{{$course->author}}</span></span>
                                <br/>
                                <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span>
                                <br/>
                                <span><i class="fa fa-comments"></i> {{count($course->comments)}}</span>
                                <br/>
                                <span><i class="fa fa-cloud"></i> {{$course->category->title}}</span>
                            </div>
                        </div>
                        <div class="button-bottom">
                            <a href="/course/{{str_slug($course->title)}}/{{$course->id}}" class="button-default">See More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12 col-sm-12 text-center">
                    <a href="/courses" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Course Area-->


@endsection
