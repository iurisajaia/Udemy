@extends('layouts.admin')

@section('adminsection')
<div class="mt-2"></div>
<div class="container">
<table class="table table-responsive-sm table-hover table-outline mb-0">
    <thead class="thead-light">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Text</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($messages as $msg)    
      <tr>
        <td>
          <div>{{$msg->name}}</div>
        </td>
        <td>
            <div>{{$msg->email}}</div>
          </td>
          <td>
            <div>{{$msg->text}}</div>
          </td>
          <td>
              <form action="/message/delete">
                <button class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
    @endforeach  
    </tbody>
  </table>
</div>
@endsection