@extends('layouts.admin')

@section('adminsection')

    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Blog</a>
      </li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          @foreach($blog as $bl)
            <div class="col-sm-6 col-md-4">
              <div class="card">
                <div class="card-header">{{$bl->title}}</div>
                <a href="/blog/{{str_slug($bl->title)}}/{{$bl->id}}">
                <img src="{{asset('storage/'.$bl->image)}}" alt="{{$bl->title}}" title="{{$bl->title}}" class="img-thumbnail"/>
                </a>  
                <div class="card-footer d-flex">
                    <form action="/home/delete/{{$bl->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-info ml-3" href="/home/edit/{{$bl->id}}">Edit</a>
                  </div>
              </div>
              
            </div>
          @endforeach
        </div>
      </div>
      {{$blog->links()}}
    </div>

@endsection