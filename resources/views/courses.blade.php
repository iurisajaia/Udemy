@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Free Online Courses List</h1>
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
                    {{csrf_field()}}
                    <div class="form-container search-container">
                        <div class="box-select">
                            <div class="select large">
                                <select name="category">
                                    <option>Category</option>
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <input type="text" class="search-input" name="search" placeholder="Search..."/>
                        <button type="submit">Search Course</button>
                    </div> 
                </form>  
            </div>
        </div>
    </div>
</div>
{{-- @foreach($categories as $cat)
    <h4>{{$cat->title}}</h4>
@endforeach --}}
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        <div class="row">
            @if(count($courses) > 0)
                @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/course/{{str_slug($course->title)}}/{{$course->id}}">
                                <img src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}" title="{{$course->title}}">
                            </a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/course/{{str_slug($course->title)}}/{{$course->id}}">{{$course->title}}</a></h4>
                            <div class="single-item-text-info">
                                <span>Author: <span>{{$course->author}}</span></span>
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
            @else 
                <h3>No Courses</h3>
            @endif        
        </div>
            {{$courses->links()}}
        

    </div>
</div>
<!--End of Course Area-->



@endsection