@extends('layouts.app')

@section('content')

    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">About FreeOnlineCourses.me</h1>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-text-container">
                        <p>
                            Hello! If you are reading this,  you are looking for free online courses and you got here. 
FreeOnlineCourses.me is a website, where you can find and download desired courses.  </p>
<p>
<p>I am a programmer which means I’m constantly searching for the most up-to-date courses to learn more and  
keep up with the newest trends of coding world but as many of you knows downloading a free course is 
an endless chain of steps:  you need to turn off the adblocker from your browser then click a link, wait 
for 10 seconds then verify through the google reCAPTCHA,  wait again and so on..</p>
<p>  This inconvenience pushed 
me to come up with an idea of creating a platform where I’d upload the same courses and everybody would be 
able to download with just a click.  </p>

<p>
We’re always trying to suggest courses of high quality. If you can not find desired file on our 
platform, please don’t hesitate to ask and we’ll try to add the course shortly. </p>

 <p>Contact: </p>
 <p>Email: <strong>support@freeonlinecourses.me</strong>
                        
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