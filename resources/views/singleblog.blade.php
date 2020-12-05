@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-md-7 align-self-center">
                    <h1 class="iq-fw-8 mb-3">{{$blog->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-5">
                    <img style="width:100%" src="{{URL::asset('images/breadcrumb/blog.png')}}" class="img-fluid" alt="">
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

                <div class="col-lg-8 iq-rmt-40">
                <div class="blog-img">
                    <img class="mr-3" alt="{{$blog->title}}" src="{{asset('storage/'.$blog->image)}}" title={{$blog->title}} />
                <h3 class="title iq-fw-8 mt-3">{{$blog->title}}</h3>
                <p>{!! $blog->description !!}
                </div>
            </div>
        </div>
    </section>
</div>
<!--End of Course Details Area-->


@endsection
