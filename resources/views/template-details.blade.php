@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Templates</h2>
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
        <img src={{URL::asset('images/breadcrumb/02.png')}} class="img-fluid breadcrumb-two" alt="image">
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
                            <h5 class="iq-widget-title iq-fw-8 mb-4">Recent Templates</h5>
                            @foreach($templates as $course)
                        
                            <div class="media mb-3">
                                <img class="mr-3" alt="{{$template->title}}" src="{{asset('storage/'.$template->image)}}">
                                <div class="media-body">
                                    <a href="/template/{{str_slug($template->title)}}/{{$template->id}}">
                                        <h6 class="mt-0 iq-fw-8">{{$template->title}}</h6>
                                    </a>
                                    {{$template->created_at->format('d M')}}
                                </div>
                            </div>
                        @endforeach

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 iq-rmt-40">
                    <div class="blog-img">
                        <img src={{asset('storage/'.$template->image)}} alt="{{$template->title}}" title="{{$template->title}}" class="img-fluid mb-4">
                        <ul class="d-inline-block">
                            <li class="d-inline-block"><a href="javascript:void(0)" class="mr-3"><i class="far fa-calendar-alt"></i> {{$template->created_at->format('d M Y')}}</a></li>
                        </ul>
                        <h1 class="title iq-fw-8 mt-3">{{$template->title}}</h1>
                        {!! $template->description !!}

                        <div class="text-center">
                            <a href="{{$template->udemy_url}}" class="button p-3" target="_blank">Preview</a>
                        </div>
                        <div class="mb-5"></div>
                        <div class="mt-5"></div>
                        <div class="text-center">
                        <a href="{{$template->file_url}}" target="_blank" class="btn btn-success">
                            Free Download
                        </a> 
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<!--End of Course Details Area-->


@endsection