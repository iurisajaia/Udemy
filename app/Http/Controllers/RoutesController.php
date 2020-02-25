<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Template;
use Auth;
use Hash;
use DB;
class RoutesController extends Controller{

    // Home Page
    public function homePage(){
        $courses = Course::orderBy('id', 'desc')->with(['comments' ,'category'])->take(6)->get();
        $templates = Template::orderBy('id', 'desc')->take(6)->get();
        $categories = Category::all();

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - Download best online courses for free',
            "description" => '
            FreeOnlineCourses.me - Download best online courses for free |
            online classes  |
        free online courses  |
        online courses  |
        online degrees | 
        tutorial  |
        javascript tutorial |
        python tutorial |
        angular tutorial |
        java tutorial |
        photoshop tutorial |
        react tutorial |
        docker tutorial |
        node js tutorial |
        php tutorial |
        laravel tutorial
            ',
        ];

        $data = [
            'courses' => $courses,
            'categories' => $categories,
            'templates' => $templates,
            'seo' => $this->seo
        ];

        return view('index')->with($data);
    }

    // About Page
    public function aboutPage(){

        $this->seo = [
            "title" => 'About Us - FreeOnlineCourses.me - Download best online courses for free',
            "description" => 'About FreeOnlineCourses.me - is a website, where you can find and download desired best online courses for free',
        ];

        return view('about')->with('seo' , $this->seo);
    }

    // Contact Page
    public function contactPage(){
        $this->seo = [
            "title" => 'Contact Us - FreeOnlineCourses.me - Download best online courses for free',
            "description" => "FreeOnlineCourses.me - Contact Us anytime to ask about course ,  we’ll try to add the course shortly",
        ];
        return view('contact')->with('seo', $this->seo);
    }

    // Courses Page
    public function coursesPage(){
        $courses = Course::orderBy('id', 'desc')->with(['comments' , 'category'])->paginate(5);
        $categories = Category::with('courses')->get();

        $this->seo = [
            "title" => 'Courses - FreeOnlineCourses.me - Download best online courses for free',
            "description" => "FreeOnlineCourses.me - here you can find and easely download free online courses with hight quality",
        ];

        $data = [
            'courses' => $courses,
            'categories' => $categories,
            'seo' => $this->seo
        ];

        return view('courses')->with($data);
    }

    // Courses Details Page
    public function coursesDetails($title , $id){
        $course = Course::where('id' , $id)->with('comments.user')->firstOrFail();

        $courses = Course::orderBy('id', 'desc')->with('comments')->take(10)->get(); // for sidebar

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - ' . $course->title .' ',
            "description" => 'About Course - ' . $course->title .' ',
        ];

        $data = [
            'course' => $course,
            'courses' => $courses,
            'comments' => $course->comments,
            'seo' => $this->seo
        ];

        return view('details')->with($data);
    }

    // Terms And Conditions Page
    public function termsPage(){
        $this->seo = [
            "title" => 'Terms And Conditions - FreeOnlineCourses.me ',
            "description" => "FreeOnlineCourses.me -  This is important and affects your legal rights, so please read them and our Privacy Policy carefully.",
        ];
        return view('terms')->with('seo' , $this->seo);
    }

    // Privacy Policy Page
    public function privacyPage(){
        
        $this->seo = [
            "title" => 'Privacy Policy - FreeOnlineCourses.me ',
            "description" => "FreeOnlineCourses.me -  This Privacy Policy document contains types of information that is collected and recorded by freeonlinecourses.me and how we use it.",
        ];
        return view('privacy')->with('seo' , $this->seo);
    }

    // Search Courses
    public function search(Request $request){
        $keyword = $request->search;
        $category = $request->category;

        $courses = Course::with('comments')
        ->where('category_id', '=', $category )
        ->orWhere('title', 'LIKE' , '%' . $keyword . '%')
        ->paginate(10);
        

        $categories = Category::all();

        $this->seo = [
            "title" => 'Search Result - FreeOnlineCourses.me ',
            "description" => "FreeOnlineCourses.me -  you can search and filter to find your favourite course",
        ];

        $data = [
            'courses' => $courses,
            'categories' => $categories,
            'seo' => $this->seo
        ];

        return view('courses')->with($data);
    }

    // Profile Page
    public function profile($id){
        $user = User::where('id' , $id)->firstOrFail();

        $this->seo = [
            "title" => 'FreeOnlineCourses.me - ' . $user->name . '',
            "description" => "FreeOnlineCourses.me -  Profile page , where you can update your data easely",
        ];
        
        $data = [
            'user' => $user,
            'seo' => $this->seo
        ];
        
        if(Auth::user()->id === $user->id){
            return view('profile')->with($data);
        }else{
            return redirect()->back();
        }
    }

    // Update User 
    public function updateProfile(Request $request, $id){
        $user = User::where('id', $id)->firstOrFail();

        if($user->id === Auth::user()->id){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return redirect('/');
        }else{
            return redirect()->back();
        }

    }

    public function searchTemplate(Request $request){
        $keyword = $request->search;

        $templates = Template::where('title', 'LIKE' , '%' . $keyword . '%')
        ->paginate(10);
        


        $this->seo = [
            "title" => 'Search Result - FreeOnlineCourses.me ',
            "description" => "FreeOnlineCourses.me -  you can search and filter to find your favourite course",
        ];

        $data = [
            'templates' => $templates,
            'seo' => $this->seo
        ];

        return view('templates')->with($data);
    }

}
