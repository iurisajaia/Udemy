<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use Auth;
use Hash;
class RoutesController extends Controller{

    // Home Page
    public function homePage(){
        $courses = Course::orderBy('id', 'desc')->with(['comments' ,'category'])->take(6)->get();
        $categories = Category::all();

        $data = [
            'courses' => $courses,
            'categories' => $categories
        ];

        return view('index')->with($data);
    }

    // About Page
    public function aboutPage(){
        return view('about');
    }

    // Contact Page
    public function contactPage(){
        return view('contact');
    }

    // Courses Page
    public function coursesPage(){
        $courses = Course::orderBy('id', 'desc')->with('comments')->paginate(20);
        
        return view('courses')->with('courses' , $courses);
    }

    // Courses Details Page
    public function coursesDetails($title , $id){
        $course = Course::where('id' , $id)->with('comments.user')->firstOrFail();

        $courses = Course::orderBy('id', 'desc')->with('comments')->take(10)->get();

        $data = [
            'course' => $course,
            'courses' => $courses,
            'comments' => $course->comments
        ];

        return view('details')->with($data);
    }

    // Terms And Conditions Page
    public function termsPage(){
        return view('terms');
    }

    // Privacy Policy Page
    public function privacyPage(){
        return view('privacy');
    }

    // Search Courses
    public function search(Request $request){
        $keyword = $request->search;

        $courses = Course::where(function ($query) use($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%')
               ->orWhere('description', 'like', '%' . $keyword . '%');
          })->paginate(10);
        return view('courses')->with('courses' , $courses);
    }

    // Profile Page
    public function profile($id){
        $user = User::where('id' , $id)->firstOrFail();

        if(Auth::user()->id === $user->id){
            return view('profile')->with('user' , $user);
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

}
