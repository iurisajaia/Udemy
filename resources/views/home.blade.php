@extends('layouts.app')
@section('content')
    <h2>Admin Panel</h2>
    <form action="/logout">
        <button>Log Out</button>
    </form>   
    @if(Auth::user()->isAdmin())
        <h3>hey admin</h3>
    @endif
    
@endsection