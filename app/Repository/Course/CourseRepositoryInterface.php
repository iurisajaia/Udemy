<?php


namespace App\Repository\Course;


interface CourseRepositoryInterface{

    public function all($id);
    public function coursesByCategory($id);
    public function singleCourse($id);

}
