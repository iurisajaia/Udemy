@extends('layouts.app')

@section('content')

<div class="mt-3"></div>
 <div class="container">
     <div class="card">
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