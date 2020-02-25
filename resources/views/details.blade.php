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
                    <img src="{{URL::asset('images/breadcrumb/blog.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-breadcrumb-img">
        <img src="{{URL::asset('images/breadcrumb/02.png')}}" class="img-fluid breadcrumb-two" alt="image">
    </div>
</section>
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

                    @if(Auth::user())   
                        <div class="contact-form-area">
                                <form action="/comment" id="contact-form" method="POST" class="mt-5">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <div class="form-group">
                                        <textarea required class="form-control" placeholder="Comment..." name="text"></textarea>
                                    </div>
                                    <button class="button p-2">Add Comment</button>
                                </form>   
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
<!--End of Course Details Area-->


@endsection