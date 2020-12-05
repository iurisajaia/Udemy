@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Blog</h2>
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
<!--End of Breadcrumb Banner Area-->


<div class="latest-area section-padding latest-page">
    <div class="container">
        <div class="row">
            @foreach($blog as $bl)
            <div class="col-lg-6 col-md-12 col-12" style="margin-top:30px">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="/blog/{{$bl->id}}"><img style="width:100%" src={{asset('storage/'.$bl->image)}} alt="{{$bl->title}}" title="{{$bl->title}}"></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="/blog/{{$bl->id}}">{{$bl->title}}</a></h3>
                       <a href="/blog/{{$bl->id}}" class="button-default">See More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
