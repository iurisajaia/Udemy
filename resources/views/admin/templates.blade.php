@extends('layouts.admin')

@section('adminsection')
<div class="mt-3"></div>
<div class="container">
<table class="table table-responsive-sm table-hover table-outline mb-0">
    <thead class="thead-light">
      <tr>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($templates as $t)    
      <tr>
        <td>
          <div>{{$t->title}}</div>
        </td>
        
          <td>
            <form action="/home/template/edit/{{$t->id}}">
                <button class="btn btn-warning">Edit</button>
              </form>
          </td>
          <td>
              <form action="/home/template/delete/{{$t->id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
    @endforeach  
    </tbody>
  </table>
</div>
@endsection