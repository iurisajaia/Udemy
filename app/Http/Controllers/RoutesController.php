<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Template;
use App\Message;
use Auth;
use Hash;
use DB;
use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Seo\SeoRepositoryInterface;
use App\Repository\Category\CategoryRepositoryInterface;
class RoutesController extends Controller{

    private $courseRepository;
    private $seoRepository;
    private $categoryRepository;

    public function __construct(
        CourseRepositoryInterface $courseRepository,
        SeoRepositoryInterface $seoRepository,
        CategoryRepositoryInterface $categoryRepository
    ){
        $this->courseRepository = $courseRepository;
        $this->seoRepository = $seoRepository;
        $this->categoryRepository = $categoryRepository;
    }

    // Home Page
    public function homePage(){

        return view('index')->with([
            'courses' => $this->courseRepository->all(6),
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
            'courses' => $this->courseRepository->all(null),
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
            'course' => $course,
            'courses' => $this->courseRepository->all(10), // for sidebar
            'comments' => $course->comments,
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

    public function subscribe(Request $request){
        $email = $request->email;

        if(!$email){
            return redirect()->back();
        }

        $subscribe = Message::create([
            'name' => 'subscribe',
            'email' => $email,
            'text' => 'subscribe'
        ]);

        $subscribe->save();

        return redirect()->back();
    }

}
