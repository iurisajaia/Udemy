@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-5">
                    <img src={{URL::asset('images/breadcrumb/blog.png')}} class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-breadcrumb-img">
        <img src={{URL::asset('images/breadcrumb/02.png')}} class="img-fluid breadcrumb-two" alt="image">
    </div>
</section>
<div class="main-content">

    <section class="iq-blogs">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="left-side-blog">
                        <div class="iq-sidebar-widget">
                                <form action="/courses/search" method="GET" class="iq-widget-search position-relative">
                                    {{csrf_field()}}

                                    <input type="search" name="search" placeholder="search" class="form-control placeholder search-btn">
                                    <button type="submit" class="search-button"> <i class="fa fa-search"></i></button>
                                 </form>

                        </div>
                        <div class="iq-sidebar-widget iq-mt-80">
                            <h5 class="iq-fw-8 mb-4">Categories</h5>
                            <ul class="d-block">
                                @foreach($categories as $cat)
                            <li class="d-block mb-3"><a href="/courses/category/{{$cat->id}}" class="iq-fw-5">{{$cat->title}}<span>{{$cat->courses->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 iq-rmt-40">
                    <div class="row">
                        @if(count($courses) > 0)
                            @foreach($courses as $course)
                                <div class="col-lg-6">
                                    <div class="main-blog">
                                        <div class="blog-img">
                                            <img src="{{asset('storage/'.$course->image)}}" class="img-fluid" alt="image">
                                        </div>
                                        <div class="blog-detail">
                                            <a class="main-color iq-fw-8" href="/course/{{str_slug($course->title)}}/{{$course->id}}">{{$course->category->title}}</a>
                                            <a href="/course/{{str_slug($course->title)}}/{{$course->id}}"><h5 class="mt-1 iq-fw-8">{{$course->title}}</h5></a>
                                            <div class="blog-info">
                                                <a href="/course/{{str_slug($course->title)}}/{{$course->id}}">
                                                    <span class="iq-fw-8 font-c iq-font-18">{{$course->created_at->format('Y-m-d')}}</span>
                                                </a>
                                                <ul class="d-inline-block float-right">
                                                    <li class="d-inline-block"><a href="/course/{{str_slug($course->title)}}/{{$course->id}}"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">{{count($course->comments)}}</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                                <h3>No Courses</h3>
                            @endif
                    </div>


                    @if(count($courses) > 0)
                        <div class="row mt-5">
                            <div class="col-sm-12">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href={{($courses->currentPage() - 1) > 0 ? $courses->previousPageUrl() : '/courses' }} >
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                        </li>
                                        @if($courses->currentPage() - 2 >= 1)
                                            <li class="page-item"><a class="page-link" href={{$courses->url($courses->currentPage() - 2)}}>{{$courses->currentPage() - 2}}</a></li>
                                        @endif
                                        @if($courses->previousPageUrl())
                                            <li class="page-item"><a class="page-link" href={{$courses->previousPageUrl()}}>{{$courses->currentPage() - 1}}</a></li>
                                        @endif
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">{{$courses->currentPage()}}<span class="sr-only">(current)</span></span>
                                        </li>

                                        @if($courses->nextPageUrl())
                                            <li class="page-item"><a class="page-link" href={{$courses->nextPageUrl()}}>{{$courses->currentPage() + 1}}</a></li>
                                        @endif

                                        @if($courses->currentPage() + 2 <= $courses->lastPage())
                                            <li class="page-item"><a class="page-link" href={{$courses->url($courses->currentPage() + 2)}}>{{$courses->currentPage() + 2}}</a></li>
                                        @endif
                                        <li class="page-item">
                                            <a class="page-link" href={{$courses->hasMorePages() ? $courses->nextPageUrl() : '#'}}>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>



@endsection
