@extends('layouts.app')

@section('content')

    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">ABOUT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--About Page Area Start-->
    <div class="about-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Who we are</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-text-container">
                        
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="skill-image">
                        <img src="{{URL::asset('img/banner/6.jpg')}}" alt="Free Online Courses" title="Free Online Courses">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Page Area-->
    
    

@endsection