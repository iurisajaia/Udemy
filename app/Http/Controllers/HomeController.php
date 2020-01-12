<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Course;
use App\Message;
use App\Comment;
use App\User;
use Storage;

class HomeController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $courses = Course::all();
        $messsages = Message::all();
        $comments = Comment::all();

        $data = [
            'courses_count' => count($courses),
            'messages_count' => count($messsages),
            'comments_count' => count($comments)
        ];

        return view('admin/index')->with($data);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    // disable register route
    public function register(){
        return redirect()->route('login');
    }

    public function create(){
        return view('admin/create');
    }

    public function courses(){
        return view('admin/courses')->with('courses', Course::orderBy('id', 'desc')->paginate(20));
    }

    // Store course
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

    // Remove Course
    public function destroy($id){
        $course = Course::where('id' , $id)->firstOrFail();
        Storage::delete($course->image);
        Storage::delete($course->file);
        $course->delete();
        return redirect('home/courses');
    }

    // Edit View
    public function edit($id){
        $course = Course::where('id' , $id)->firstOrFail();

        return view('admin.edit')->with('course' , $course);
    }

    // Update Course
    public function update(Request $request , $id){
        $course = Course::where('id' , $id)->firstOrFail();

        $course->title = $request->title;
        $course->author = $request->author;
        $course->description = $request->description;
        $course->save();

        return redirect('home/courses');
    }

    
}
