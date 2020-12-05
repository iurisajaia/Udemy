<?php


namespace App\Repository\Course;
use App\Course;

class CourseRepository implements CourseRepositoryInterface{


    public function all($id){

        if($id){
            return Course::orderBy('id', 'desc')->with(['comments' ,'category'])->take(6)->get();
        }else{
            return Course::orderBy('id', 'desc')->with(['comments' , 'category'])->paginate(10);
        }
    }

    public function coursesByCategory($id){
        return Course::where('category_id' , $id)->orderBy('id', 'desc')->with(['comments' , 'category'])->paginate(10);
    }

    public function singleCourse($id){
        return Course::where('id' , $id)->with('comments.user')->firstOrFail();
    }


}
