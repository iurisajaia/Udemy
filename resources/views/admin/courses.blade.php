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
                <img src="{{asset('storage/'.$course->image)}}" />
                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                  ut aliquip ex ea commodo consequat.</div>
              </div>
              <form action="/home/delete/{{$course->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
              </form>

              <a class="btn btn-info" href="/home/edit/{{$course->id}}">Edit</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>

@endsection