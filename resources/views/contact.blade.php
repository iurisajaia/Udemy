@extends('layouts.app')

@section('content')

<!--Breadcrumb Banner Area Start-->
<section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-5">
                    <img src="images/breadcrumb/contact-us.png" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-breadcrumb-img">
        <img src="images/breadcrumb/02.png" class="img-fluid breadcrumb-two" alt="image">
    </div>
</section>
<!--End of Breadcrumb Banner Area-->

<!--Contact Form Area Start-->


<div class="main-content">
    <section class="iq-contact-us pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title mb-4">
                        <h2 class="title iq-fw-8">Contact Form</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-form mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="contact-form" action="/message" method="post">
                                    @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control contact-first-name" placeholder="First Name" required name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control contact-email" required name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea class="form-control contact-message" name="text" required placeholder="Type Your Requirement"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="button">Send</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title iq-fw-8">Get in Touch</h2>
                            <div class="iq-address mt-3">
                                <div class="media ">
                                    <div class="mr-3 contact-icon float-left"><i class="fas fa-envelope "></i> </div>
                                    <div class="media-body">
                                        <p class="iq-fw-5"><a href="https://iqonicthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ad7fbf3f6dafef3fdf3eefbf6f7fbe8f1ffeef3f4fdb4f9f5f7">support@freeonlinecourses.me</a></p>
                                    </div>
                                </div>
                                <div class="media ">
                                    <div class="mr-3 contact-icon float-left"><i class="fa fa-phone"></i> </div>
                                    <div class="media-body">
                                        <p class="iq-fw-5">+995 598-29-79-61</p>
                                    </div>
                                </div>
                                <div class="social-media mt-4 ">
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/bestonlinecoursesforfree" target="_blank"><i class="fab fa-facebook-f "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<!--End of Contact Form-->


@endsection