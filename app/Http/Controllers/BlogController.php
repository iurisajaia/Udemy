<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller{

    public function index(){
        return view('blog');
    }

    public function store(Request $request){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
