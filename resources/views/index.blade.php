@extends('layouts.app')
@section('content')

    <!--Slider Area Start-->
    <div class="slider-area">
        <div class="preview-2">
            <div id="nivoslider" class="slides">
                <img src="{{ URL::asset('img/slider/1.png')}}" alt="Free Online Tutorials" title="Free Online Tutorials"/>
            </div>
            <div class="slider-overlay">
                <h1><span>F</span>ree <span>O</span>nline <span>C</span>ourses </h1>
            </div>
        </div>
    </div>
    <!--End of Slider Area-->
    <!--Course Area Start-->
    <div class="course-area section-padding bg-white">
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
                            <a href="/courses/{{$course->title}}/{{$course->id}}"><img src="{{asset('storage/'.$course->image)}}" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/courses/{{$course->title}}/{{$course->id}}">{{$course->title}}</a></h4>
                            <div class="single-item-text-info">
                                <span>By: <span>{{$course->author}}</span></span>
                                <br/>
                                <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span>
                                <br/>
                                <span><i class="fa fa-comments"></i> {{count($course->comments)}}</span>
                            </div>
                        </div>
                        <div class="button-bottom">
                            <a href="/courses/{{$course->title}}/{{$course->id}}" class="button-default">See More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12 col-sm-12 text-center">
                    <a href="/courses" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Course Area-->
    
    
@endsection