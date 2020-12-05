@extends('layouts.app')

@section('content')
<section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">{{$user->name}}'s Profile</h2>
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

<div class="mt-3"></div>
 <div class="container">
    
     <div class="card mt-3">
         <div class="card-header">
             <h6>Update My Profile Info</h6>
         </div>
         <div class="card-body">
             <form action="/user/update/{{$user->id}}" method="POST">
                @csrf
                @method('PUT')
                 <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Username" value="{{$user->name}}">
                 </div>
                 <div class="form-group">
                 <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                </div>
                {{-- <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div> --}}
                <button class="btn btn-success">Update</button>
             </form>
         </div>
     </div>
 </div>
 <div class="mb-3"></div>

@endsection