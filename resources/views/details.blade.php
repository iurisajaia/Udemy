@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">COURSES DETAILS</h1>
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
                                    <a href="#"><img alt="" src={{URL::asset('img/details/1.jpg')}} /></a>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="single-item-text">
                                    <h4>Photoshop CC 2017</h4>
                                    <div class="single-item-text-info">
                                        <span>By: <span>Salim Rana</span></span>
                                        <span>Date: <span>20.5.15</span></span>
                                    </div>
                                    <div class="course-text-content">
                                        <p>There are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some</p>
                                        <p>but the mrity have suffered alteration in some orm, mora ekti fol ke bacabo herre many buthe mri have suffered alteration in</p>
                                    </div> 
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="course-text-content p-3">
                                    <p>There are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some</p>
                                    <p>but the mrity have suffered alteration in some orm, mora ekti fol ke bacabo herre many buthe mri have suffered alteration in</p>
                                </div> 
                            </div>
                        </div>     
                    </div>
                </div>    
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Related Courses</h4>
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="#"><img alt="" src="img/course/1.jpg"></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="#">Photoshop CC 2017</a></h4>
                                <div class="single-item-text-info">
                                    <span>By: <span>M S Nawaz</span></span>
                                    <span>Date: <span>20.5.15</span></span>
                                </div>
                                <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo</p>
                                <div class="single-item-content">
                                   <div class="single-item-comment-view">
                                       <span><i class="zmdi zmdi-eye"></i>59</span>
                                       <span><i class="zmdi zmdi-comments"></i>19</span>
                                   </div>
                                   <div class="single-item-rating">
                                       <i class="zmdi zmdi-star"></i>
                                       <i class="zmdi zmdi-star"></i>
                                       <i class="zmdi zmdi-star"></i>
                                       <i class="zmdi zmdi-star"></i>
                                       <i class="zmdi zmdi-star-half"></i>
                                   </div>
                                </div>   
                            </div>
                            <div class="button-bottom">
                                <a class="button-default" href="#">Learn Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Details Area-->


@endsection