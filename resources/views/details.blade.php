@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h3 class="text-center">COURSES DETAILS</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Course Details Area Start-->
<div class="course-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12">
                <div class="course-details-content">
                    <div class="single-course-details">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="overlay-effect">
                                        <img  src={{asset('storage/'.$course->image)}} alt="{{$course->title}}" title="{{$course->title}}"/>
                                
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="single-item-text">
                                    <h2>{{$course->title}}</h2>
                                    <div class="single-item-text-info">
                                        <span>Author: <span>{{$course->author}}</span></span>
                                    </div>
                                    <div class="single-item-text-info">
                                        <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="course-text-content p-3">
                                    {!! $course->description !!}
                                </div> 
                                <a href="{{asset('storage/'.$course->file)}}" class="btn btn-success">
                                    Direct Download
                                </a>   
                            </div>
                        </div>     
                    </div>
                </div>    
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Related Courses</h4>
                        @foreach($courses as $course)
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="/courses/{{$course->id}}"><img alt="" src="{{asset('storage/'.$course->image)}}"></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="/courses/{{$course->id}}">{{$course->title}}</a></h4>
                                <div class="single-item-text-info">
                                    <span>Author: <span>{{$course->author}}</span></span>
                                    <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a class="button-default" href="#">See More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Details Area-->


@endsection