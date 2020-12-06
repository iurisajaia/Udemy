<?php


namespace App\Repository\Course;


interface CourseRepositoryInterface{

    public function all($id , $take);
    public function coursesByCategory($id);
    public function singleCourse($id);
    public function searchCourse($request);
    public function store($request);
    public function destroy($id);
    public function update($request, $id);

}
