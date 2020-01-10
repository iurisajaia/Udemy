<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin/index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function register(){
        return redirect()->route('login');
    }

    public function create(){
        return view('admin/create');
    }

    public function courses(){
        return view('admin/courses');
    }
}
