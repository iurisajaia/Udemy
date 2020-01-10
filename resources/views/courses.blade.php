@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">COURSES</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Search Category Start-->
<div class="search-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <form action="#" method="post">
                    <div class="form-container search-container">
                                <input type="text" class="search-input"/>
                        <button type="button">Search Course</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="/courses/1"><img src="img/course/1.jpg" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Photoshop CC 2017 By Someone Beginner To Masster Full Road</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>M S Nawaz</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
                        ur,There are many but the mri have suffered alteration in some </p>  
                    </div>
                    <div class="button-bottom">
                        <a href="/courses/1" class="button-default">View Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="/courses/2"><img src="img/course/2.jpg" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Illustrator CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Subas Das</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
                        ur,There are many but the mri have suffered alteration in some </p> 
                    </div>
                    <div class="button-bottom">
                        <a href="/courses/2" class="button-default">View Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="/courses/3"><img src="img/course/3.jpg" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Indesign CC 2017 Best Practises By Someone Cool Person A-Z Beginner To Master</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Momin Boss</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo
                ur,There are many but the mri have suffered alteration in some Lorem ipsum dolor sit amet.</p> 
                    </div>
                    <div class="button-bottom">
                        <a href="/courses/3" class="button-default">View Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->



@endsection