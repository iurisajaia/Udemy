@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-5">
                    <img src="images/breadcrumb/blog.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-breadcrumb-img">
        <img src="images/breadcrumb/02.png" class="img-fluid breadcrumb-two" alt="image">
    </div>
</section>
 {{-- <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">{{$course->title}}</h1>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End of Breadcrumb Banner Area-->
<!--Course Details Area Start-->

<div class="main-content">
    <section class="iq-blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-side-blog">
                        
                        <div class="iq-mt-80">
                            <h5 class="iq-widget-title iq-fw-8 mb-4">Recent Courses</h5>
                            @foreach($courses as $course)
                        
                            <div class="media mb-3">
                                <img class="mr-3" alt="{{$course->title}}" src="{{asset('storage/'.$course->image)}}">
                                <div class="media-body">
                                    <a href="/course/{{str_slug($course->title)}}/{{$course->id}}">
                                        <h6 class="mt-0 iq-fw-8">{{$course->title}}</h6>
                                    </a>
                                    {{$course->created_at->format('d M')}}
                                </div>
                            </div>
                        @endforeach

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 iq-rmt-40">
                    <div class="blog-img">
                        <img src={{asset('storage/'.$course->image)}} alt="{{$course->title}}" title="{{$course->title}}" class="img-fluid mb-4">
                        <ul class="d-inline-block">
                            <li class="d-inline-block"><a href="javascript:void(0)" class="mr-3"><i class="far fa-calendar-alt"></i> {{$course->created_at->format('d M Y')}}</a></li>
                            <li class="d-inline-block">|<a href="javascript:void(0)"><span class="ml-3">{{$course->category->title}}</span> </a></li>
                        </ul>
                        <h1 class="title iq-fw-8 mt-3">{{$course->title}}</h1>
                        {!! $course->description !!}

                       
                        <a class="slide-button button contact-us-button" href="{{asset('storage/'.$course->file)}}">
                            <div class="first">Direct Download</div>
                            <div class="second">Direct Download</div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <h2 class="title mt-5 iq-fw-8 mb-3">Comments</h2>
                    <ul class="d-block">
                        @foreach($comments as $comment)
                        <li class="list-inline-item">
                            <div class="comments-box position-relative">
                                <div class="media">
                                    <img class="mr-3 rounded-circle" alt={{$comment->user->email}} src="{{ Gravatar::src($comment->user->email) }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 float-left">{{$comment->user->name}} </h5>
                                        <a class="month-detail float-right" href="javascript:void(0)"><i class="far fa-calendar-alt"></i> {{$comment->created_at->format('d M Y')}}</a>
                                        <div class="clearfix"></div>
                                        <P>{{$comment->text}}</P>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <br/>
                        <br/>
                        @endforeach
                        
                    </ul>

                    {{-- @if(Auth::user())    --}}
                            <div class="contact-form-area">
                                    <form action="/comment" id="contact-form" method="POST" class="mt-5">
                                    @csrf
                                    {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
    
                                    <div class="form-group">
                                        <textarea required class="form-control" placeholder="Comment..." name="text"></textarea>
                                    </div>
                                    
                                    <button class="button">Add Comment</button>
    
                                    </form>   
                            </div>
                            {{-- @endif --}}
                </div>
            </div>
        </div>
    </section>
</div>

<div class="course-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12">
                <div class="course-details-content">
                    {{-- <div class="single-course-details">
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
                                <div class="course-text-content">
                                    {!! $course->description !!}
                                </div> 
                                <div class="mt-5"></div>
                                <a href="{{asset('storage/'.$course->file)}}" class="btn btn-success">
                                    Direct Download
                                </a>   
                            </div>
                        </div>     
                    </div> --}}

                    {{-- Comments --}}
                    {{-- <div class="comments">
                        <h4 class="title">Comments ({{count($comments)}})</h4>
                        @foreach($comments as $comment)
                            <div class="single-comment">
                                <div class="author-image">
                                    <img alt={{$comment->user->email}} src="{{ Gravatar::src($comment->user->email, 200) }}">
                                    
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4>{{$comment->user->name}}</h4>
                                        <span class="comment-time">Posted on {{$comment->created_at->format('Y-m-d')}}</span>
                                    </div>
                                    {{$comment->text}}
                                </div>
                            </div>
                        @endforeach

    
                            @if(Auth::user())   
                            <div class="contact-form-area">
                                    <form action="/comment" id="contact-form" method="POST" class="mt-5">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
    
                                    <div class="form-group">
                                        <textarea required class="form-control" placeholder="Comment..." name="text"></textarea>
                                    </div>
    
                                    <button class="button-default">Add Comment</button>
    
                                    </form>   
                            </div>
                            @endif
    
                    </div> --}}
                    {{-- End Comments --}}
                </div> 
            </div>
            {{-- <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Related Courses</h4>
                        @foreach($courses as $course)
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="/course/{{str_slug($course->title)}}/{{$course->id}}"><img alt="{{$course->title}}" src="{{asset('storage/'.$course->image)}}"></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="/course/{{str_slug($course->title)}}/{{$course->id}}">{{$course->title}}</a></h4>
                                <div class="single-item-text-info">
                                    <span>Author: <span>{{$course->author}}</span></span>
                                    <br/>
                                    <span>Date: <span>{{$course->created_at->format('Y-m-d')}}</span></span>
                                    <br/>
                                    <span><i class="fa fa-comments"></i> {{count($course->comments)}}</span>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a class="button-default" href="/course/{{str_slug($course->title)}}/{{$course->id}}">See More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!--End of Course Details Area-->


@endsection