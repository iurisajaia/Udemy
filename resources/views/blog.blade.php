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
            <div class="col-lg-6 col-md-12 col-12">
                <div class="single-latest-item">
                    <div class="single-latest-image">
                        <a href="#"><img src="img/latest/1.jpg" alt=""></a>
                    </div>
                    <div class="single-latest-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                           <span><i class="zmdi zmdi-eye"></i>59</span>
                           <span><i class="zmdi zmdi-comments"></i>19</span>
                       </div>
                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                       <a href="#" class="button-default">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection