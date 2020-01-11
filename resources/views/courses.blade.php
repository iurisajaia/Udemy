@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">COURSES</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Search Category Start-->
<div class="search-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <form action="/courses/search" method="GET">
                    {{-- {{csrf_field()}} --}}
                    <div class="form-container search-container">
                                <input type="text" class="search-input" name="search"/>
                        <button type="submit">Search Course</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="/courses/{{$course->title}}/{{$course->id}}">
                            <img src="{{asset('storage/'.$course->image)}}" alt="">
                        </a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="/courses/{{$course->title}}/{{$course->id}}">{{$course->title}}</a></h4>
                        <div class="single-item-text-info">
                            <span>Author: <span>{{$course->author}}</span></span>
                            {{-- <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span> --}}
                        </div> 
                    </div>
                    <div class="button-bottom">
                        <a href="/courses/{{$course->title}}/{{$course->id}}" class="button-default">See More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            {{$courses->links()}}
        

    </div>
</div>
<!--End of Course Area-->



@endsection