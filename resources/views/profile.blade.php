@extends('layouts.app')

@section('content')

<div class="mt-3"></div>
 <div class="container">
     <div class="card">
         <div class="card-header">
             <h3>Update My Data</h3>
         </div>
         <div class="card-body">
             <form action="">
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" value="{{$user->name}}">
                 </div>
                 <div class="form-group">
                 <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <button class="btn btn-success">Update</button>
             </form>
         </div>
     </div>
 </div>
 <div class="mb-3"></div>

@endsection