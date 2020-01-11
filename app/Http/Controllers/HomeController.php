<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Course;
use Storage;

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
        return view('admin/courses')->with('courses', Course::all());
    }

    public function store(Request $request){

        $image = $request->image->store('images');

        $filename = $request->file->getClientOriginalName();
        $file = $request->file->storeAs('files' , $filename);

        Course::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $image,
            'file' => $file
        ]);

        return redirect('home/courses');

    }

    public function destroy($id){
        $course = Course::where('id' , $id)->firstOrFail();
        Storage::delete($course->image);
        Storage::delete($course->file);
        $course->delete();
        return redirect('home/courses');
    }


    public function edit($id){
        $course = Course::where('id' , $id)->firstOrFail();

        return view('admin.edit')->with('course' , $course);
    }

    public function update(Request $request , $id){
        $course = Course::where('id' , $id)->firstOrFail();

        $course->title = $request->title;
        $course->author = $request->author;
        $course->description = $request->description;
        $course->save();

        return redirect('home/courses');
    }
}
