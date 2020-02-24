@extends('layouts.app')

@section('content')

 <!--Breadcrumb Banner Area Start-->
 <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Web Templates Free Download</h1>
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
                <form action="/templates/search" method="GET">
                    {{csrf_field()}}
                    <div class="form-container search-container">
                        <input type="text" class="search-input" name="search" placeholder="Search..."/>
                        <button type="submit">Search Template</button>
                    </div> 
                </form>  
            </div>
        </div>
    </div>
</div>
{{-- @foreach($categories as $cat)
    <h4>{{$cat->title}}</h4>
@endforeach --}}
<!--End of Search Category-->
<!--Course Area Start-->
<div class="course-area section-padding course-page">
    <div class="container">
        <div class="row">
            @if(count($templates) > 0)
                @foreach($templates as $template)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="/template/{{str_slug($template->title)}}/{{$template->id}}">
                                <img src="{{asset('storage/'.$template->image)}}" alt="{{$template->title}}" title="{{$template->title}}">
                            </a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="/template/{{str_slug($template->title)}}/{{$template->id}}">{{$template->title}}</a></h4>
                            <div class="single-item-text-info">
                                <br/>
                                <span>Date: <span>{{$template->created_at->format('Y-m-d')}}</span></span>

                            </div> 
                        </div>
                        <div class="button-bottom">
                            <a href="/template/{{str_slug($template->title)}}/{{$template->id}}" class="button-default">See More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else 
                <h3>No Templates</h3>
            @endif        
        </div>
            {{$templates->links()}}
        

    </div>
</div>
<!--End of Course Area-->



@endsection