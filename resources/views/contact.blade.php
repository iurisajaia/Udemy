@extends('layouts.app')

@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Contact To FreeOnlineCourses.me</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->

<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h1 class="contact-title">contact info</h1>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">+995 598-29-79-61</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">support@freeonlinecourses.me</span></p>
                </div>
                {{-- <h4 class="contact-title">social media</h4> --}}
                {{-- <div class="link-social"> --}}
                    {{-- <a href="#"><i class="fa fa-facebook"></i></a> --}}
                    {{-- <a href="#"><i class="fa fa-google-plus"></i></a> --}}
                {{-- </div> --}}
            </div>
            <div class="col-lg-8 col-md-12">
                <h4 class="contact-title">send your massage</h4>
                <form id="contact-form" action="/message" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" required name="name" placeholder="name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" required name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea name="text"  required cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="button-default">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Form-->


@endsection