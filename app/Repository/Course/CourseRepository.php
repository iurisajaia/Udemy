<?php


namespace App\Repository\Course;
use App\Course;
use Storage;

class CourseRepository implements CourseRepositoryInterface{


    public function all($id , $take){

        if($id){
            return Course::orderBy('id', 'desc')->with(['comments' ,'category'])->take(6)->get();
        }else{
            return Course::orderBy('id', 'desc')->with(['comments' , 'category'])->paginate($take);
        }
    }

    public function coursesByCategory($id){
        return Course::where('category_id' , $id)->orderBy('id', 'desc')->with(['comments' , 'category'])->paginate(10);
    }

    public function singleCourse($id){
        return Course::where('id' , $id)->with('comments.user')->firstOrFail();
    }

    public function searchCourse($request){
        $category = $request->category;
        $keyword = $request->search;

        return Course::with('comments')
            ->where('category_id', '=', $category )
            ->orWhere('title', 'LIKE' , '%' . $keyword . '%')
            ->paginate(10);
    }

    public function store($request){
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
    }

    public function destroy($id){
        $course = Course::where('id' , $id)->firstOrFail();
        Storage::delete($course->image);
        Storage::delete($course->file);
        $course->delete();
    }

    public function update($request, $id){
        $course = Course::where('id' , $id)->firstOrFail();

        $course->title = $request->title;
        $course->author = $request->author;
        $course->description = $request->description;
        $course->save();
    }
}
