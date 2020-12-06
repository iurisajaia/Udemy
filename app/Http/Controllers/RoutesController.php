<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Seo\SeoRepositoryInterface;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\User\UserRepositoryInterface;
use App\Repository\Template\TemplateRepositoryInterface;
use App\Repository\Message\MessageRepositoryInterface;

class RoutesController extends Controller{

    private $courseRepository;
    private $seoRepository;
    private $categoryRepository;
    private $userRepository;
    private $templateRepository;
    private $messageRepository;

    public function __construct(
        CourseRepositoryInterface $courseRepository,
        SeoRepositoryInterface $seoRepository,
        CategoryRepositoryInterface $categoryRepository,
        UserRepositoryInterface $userRepository,
        TemplateRepositoryInterface $templateRepository,
        MessageRepositoryInterface $messageRepository
    ){
        $this->courseRepository = $courseRepository;
        $this->seoRepository = $seoRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;
        $this->templateRepository = $templateRepository;
        $this->messageRepository = $messageRepository;
    }

    // Home Page
    public function homePage(){

        return view('index')->with([
            'courses' => $this->courseRepository->all(null , 9),
            'seo' => $this->seoRepository->home()
        ]);

    }

    // About Page
    public function aboutPage(){
        return view('about')->with('seo' , $this->seoRepository->about());
    }

    // Contact Page
    public function contactPage(){
        return view('contact')->with('seo', $this->seoRepository->contact());
    }

    // Courses Page
    public function coursesPage(){
        return view('courses')->with([
            'courses' => $this->courseRepository->all(null , 10),
            'categories' => $this->categoryRepository->all(),
            'seo' => $this->seoRepository->courses()
        ]);
    }

    public function byCategory($id){
        return view('courses')->with([
            'courses' => $this->courseRepository->coursesByCategory($id),
            'categories' => $this->categoryRepository->all(),
            'seo' => $this->seoRepository->courses()
        ]);
    }

    // Courses Details Page
    public function coursesDetails($title , $id){
        $course = $this->courseRepository->singleCourse($id);

        return view('details')->with([
            'course' => $this->courseRepository->singleCourse($id),
            'courses' => $this->courseRepository->all(10), // for sidebar
            'seo' => $this->seoRepository->course($course)
        ]);
    }

    // Terms And Conditions Page
    public function termsPage(){
        return view('terms')->with('seo' , $this->seoRepository->about());
    }

    // Privacy Policy Page
    public function privacyPage(){
        return view('privacy')->with('seo' , $this->seoRepository->about());
    }

    // Search Courses
    public function search(Request $request){
        return view('courses')->with([
            'courses' => $this->courseRepository->searchCourse($request),
            'categories' => $this->categoryRepository->all(),
            'seo' => $this->seoRepository->search()
        ]);
    }

    // Profile Page
    public function profile($id){
        $user = $this->userRepository->singleUser($id);

        if(Auth::user()->id === $user->id){
            return view('profile')->with([
                'user' => $user,
                'seo' => $this->seoRepository->userProfile($user->name)
            ]);
        }else{
            return redirect()->back();
        }
    }

    // Update User
    public function updateProfile(Request $request, $id){
        $user = $this->userRepository->singleUser($id);

        if($user->id === Auth::user()->id){
            $this->userRepository->updateUser($user, $request);
            return redirect('/');
        }else{
            return redirect()->back();
        }

    }

    public function searchTemplate(Request $request){
        return view('templates')->with([
            'templates' => $this->templateRepository->searchTemplates($request->search),
            'seo' => $this->seoRepository->courses()
        ]);
    }

    public function subscribe(Request $request){
        $email = $request->email;

        if(!$email){
            return redirect()->back();
        }

        $this->messageRepository->saveMessage($email);

        return redirect()->back();
    }

}
