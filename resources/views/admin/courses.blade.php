@extends('layouts.admin')

@section('adminsection')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Courses</a>
      </li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          @foreach($courses as $course)
            <div class="col-sm-6 col-md-4">
              <div class="card">
                <div class="card-header">{{$course->title}}</div>
                <img src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}" title="{{$course->title}}" class="img-thumbnail"/>
                  <div class="card-footer d-flex">
                    <form action="/home/delete/{{$course->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-info ml-3" href="/home/edit/{{$course->id}}">Edit</a>
                  </div>
              </div>
              
            </div>
          @endforeach
        </div>
      </div>
    </div>

@endsection