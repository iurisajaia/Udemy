<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller{

    public function index(){
        $blog = Blog::orderBy('id', 'desc')->paginate(10);

        return view('blog')->with('blog' , $blog);
    }



    public function store(Request $request){
        $image = $request->image->store('images');


        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect('home/blog');
    }

    public function show($id){
        $blog = Blog::find($id);

        $this->seo = [
                    "title" => $blog->title,
                    "description" => $blog->title ,
         ];

         $data = [
           'seo' => $this->seo,
           'blog' => $blog
         ];
        return view('singleblog')->with($data);
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

    public function adminIndex(){
        $blog = Blog::orderBy('id', 'desc')->paginate(10);

        return view('admin.blog')->with('blog' , $blog);
    }

    public function create(){
        return view('admin.create-blog');
    }
}
