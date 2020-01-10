<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller{

    // Home Page
    public function homePage(){
        return view('index');
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
        return view('courses');
    }

    // Courses Details Page
    public function coursesDetails($id){
        return view('details');
    }

    // Terms And Conditions Page
    public function termsPage(){
        return view('terms');
    }

    // Privacy Policy Page
    public function privacyPage(){
        return view('privacy');
    }
}
