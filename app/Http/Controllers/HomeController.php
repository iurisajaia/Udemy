<?php

namespace App\Http\Controllers;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Message\MessageRepositoryInterface;
use App\Repository\Seo\SeoRepositoryInterface;
use App\Repository\Template\TemplateRepositoryInterface;
use App\Repository\User\UserRepositoryInterface;
use Auth;
use Illuminate\Http\Request;
use App\Course;
use App\Message;
use App\Comment;
use App\Category;

class HomeController extends Controller
{
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
        $this->middleware('auth');
        $this->courseRepository = $courseRepository;
        $this->seoRepository = $seoRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;
        $this->templateRepository = $templateRepository;
        $this->messageRepository = $messageRepository;
    }

    public function index(){
        return view('admin/index')->with([
            'courses_count' => Course::count(),
            'messages_count' => Message::count(),
            'comments_count' => Comment::count(),
            'categories_count' => Category::count(),
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function create(){
        return view('admin/create')->with('categories' , $this->categoryRepository->all());
    }

    public function courses(){
        return view('admin/courses')->with('courses' , $this->courseRepository->all(null , 10));
    }

    // Store course
    public function store(Request $request){

        $this->courseRepository->store($request);

        return redirect('home/courses');

    }

    // Remove Course
    public function destroy($id){
        $this->courseRepository->destroy($id);
        return redirect('home/courses');
    }

    // Edit View
    public function edit($id){
        return view('admin.edit')->with('course' , $this->courseRepository->singleCourse($id));
    }

    // Update Course
    public function update(Request $request , $id){

        $this->courseRepository->update($request,$id);

        return redirect('home/courses');
    }

    public function categories(){
        return view('admin/categories')->with('categories' , $this->categoryRepository->all());
    }

    public function createCategory(){
        return view('admin/create-category');
    }

    public function storeCategory(Request $request){
        $this->categoryRepository->create($request);
        return redirect('/home/categories');
    }

    // Templates

    public function templates(){
        return view('admin/templates')->with('templates' , $this->templateRepository->all());
    }

    public function createTemplate(){
        return view('admin/create-template');
    }

    public function storeTemplate(Request $request){

        $this->templateRepository->store($request);

        return redirect('home/templates');
    }

    public function editTemplate($id){
        return view('admin.edit-template')->with('template' , $this->templateRepository->edit($id));
    }

    public function deleteTemplate($id){
        $this->templateRepository->destroy($id);
        return redirect('home/templates');
    }
}
