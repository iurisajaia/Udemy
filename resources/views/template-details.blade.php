@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">{{$template->title}}</h1>
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
                                        <img  src={{asset('storage/'.$template->image)}} alt="{{$template->title}}" title="{{$template->title}}"/>
                                
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="single-item-text">
                                    <h2>{{$template->title}}</h2>
                                    <div class="single-item-text-info">
                                        <span>Date: <span>{{$template->created_at->format('Y-m-d')}}</span></span>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                
                                <div class="course-text-content">
                                    <br/>
                                    {!! $template->description !!}
                                </div> 
                                <div class="mt-5"></div>
                                <div class="text-center">
                                    <a href="{{$template->udemy_url}}" class="previewButton" target="_blank">Preview</a>
                                </div>
                                <div class="mb-5"></div>
                                <div class="mt-5"></div>

                                <a href="{{$template->file_url}}" target="_blank" class="btn btn-success">
                                    Free Download
                                </a>   
                            </div>
                        </div>     
                    </div>

                    
                </div> 
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Related Templates</h4>
                        @foreach($templates as $template)
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="/template/{{str_slug($template->title)}}/{{$template->id}}"><img alt="{{$template->title}}" src="{{asset('storage/'.$template->image)}}"></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="/template/{{str_slug($template->title)}}/{{$template->id}}">{{$template->title}}</a></h4>
                                <div class="single-item-text-info">
                                    <span>Date: <span>{{$template->created_at->format('Y-m-d')}}</span></span>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a class="button-default" href="/template/{{str_slug($template->title)}}/{{$template->id}}">See More</a>
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