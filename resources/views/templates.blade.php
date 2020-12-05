@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Templates</h2>
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

<div class="main-content">

    <section class="iq-blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/templates/search" method="GET" class="iq-widget-search position-relative">
                        {{csrf_field()}}

                        <input type="search" name="search" placeholder="search" class="form-control placeholder search-btn">
                        <button type="submit" class="search-button"> <i class="fa fa-search"></i></button>
                     </form>

                    </form>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12 iq-rmt-40">
                    <div class="row">
                        @if(count($templates) > 0)
                            @foreach($templates as $template)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="main-blog">
                                        <div class="blog-img">
                                            <img src="{{asset('storage/'.$template->image)}}" class="img-fluid" alt="image">
                                        </div>
                                        <div class="blog-detail">
                                            <a href="/template/{{str_slug($template->title)}}/{{$template->id}}"><h5 class="mt-1 iq-fw-8">{{$template->title}}</h5></a>
                                            <div class="blog-info">
                                                <a href="/template/{{str_slug($template->title)}}/{{$template->id}}">
                                                    <span class="iq-fw-8 font-c iq-font-18">{{$template->created_at->format('Y-m-d')}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3>No Templates</h3>
                        @endif

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href={{($templates->currentPage() - 1) > 0 ? $templates->previousPageUrl() : '/templates' }} >
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">{{$templates->currentPage()}}<span class="sr-only">(current)</span></span>
                                    </li>
                                    @if($templates->nextPageUrl())
                                    <li class="page-item"><a class="page-link" href={{$templates->nextPageUrl()}}>{{$templates->currentPage() + 1}}</a></li>
                                    @endif
                                    <li class="page-item">
                                        <a class="page-link" href={{$templates->hasMorePages() ? $templates->nextPageUrl() : '#'}}>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection
