@extends('layouts.app')
@section('content')
    <h1>Admin Panel</h1>
    <form action="/logout">
        <button>Log Out</button>
    </form>   
    @if(Auth::user()->isAdmin())
        <h3>hey admin</h3>
    @endif
    
@endsection