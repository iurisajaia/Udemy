<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Course;
use App\Message;
use App\Comment;
use App\User;
use App\Template;
use App\Category;
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
        $categories = Category::all();
        // $templates = Template::all();

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - Admin Panel',
            "description" => "FreeOnlineCourses.me - you can manage your website data from here",
        ];

        $data = [
            'courses_count' => count($courses),
            'messages_count' => count($messsages),
            'comments_count' => count($comments),
            'categories_count' => count($categories),
            'seo' => $this->seo
        ];

        return view('admin/index')->with($data);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function create(){
        return view('admin/create')->with('categories' , Category::all());
    }

    
    public function courses(){
        $courses = Course::orderBy('id', 'desc')->with('category')->paginate(20);

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - free online courses',
            "description" => "FreeOnlineCourses.me -  website dashboard , where you can add your courses easely",
        ];


        $data = [
            'courses' => $courses,
            'seo' => $this->seo
        ];

        return view('admin/courses')->with($data);
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
            'category_id' => $request->category_id,
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

    public function categories(){
        $categories = Category::all();

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - categories',
            "description" => "FreeOnlineCourses.me -  Profile page , where you can check your categories easely",
        ];

        $data = [
            'categories' => $categories,
            'seo' => $this->seo
        ];

        return view('admin/categories')->with($data);
    }

    public function createCategory(){
        return view('admin/create-category');
    }

    public function storeCategory(Request $request){
        Category::create([
            'title' => $request->title,
        ]);
        return redirect('/home/categories');
    }



    // Templates 

    public function templates(){
        $templates = Template::orderBy('id', 'desc')->paginate(20);

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - free online courses',
            "description" => "FreeOnlineCourses.me -  website dashboard , where you can add your courses easely",
        ];


        $data = [
            'templates' => $templates,
            'seo' => $this->seo
        ];

        return view('admin/templates')->with($data);
    }

    public function createTemplate(){
        return view('admin/create-template');
    }

    public function storeTemplate(Request $request){

        $image = $request->image->store('images');


        Template::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_url' => $request->file_url,
            'image' => $image,
            'udemy_url' => $request->udemy_url
        ]);

        return redirect('home/templates');
    }

    public function editTemplate($id){
        $template = Template::where('id' , $id)->firstOrFail();

        return view('admin.edit-template')->with('template' , $template);
    }


    public function deleteTemplate($id){
        $template = Template::where('id' , $id)->firstOrFail();
        Storage::delete($template->image);
        $template->delete();
        return redirect('home/templates');
    }
}
