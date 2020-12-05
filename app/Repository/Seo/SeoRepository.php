<?php


namespace App\Repository\Seo;

class SeoRepository implements SeoRepositoryInterface{


    public function home(){
        return [
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
    }
    public function about(){
        return [
            "title" => 'About Us - FreeOnlineCourses.me - Download best online courses for free',
            "description" => 'About FreeOnlineCourses.me - is a website, where you can find and download desired best online courses for free',
        ];
    }
    public function contact(){
        return [
            "title" => 'Contact Us - FreeOnlineCourses.me - Download best online courses for free',
            "description" => "FreeOnlineCourses.me - Contact Us anytime to ask about course ,  we’ll try to add the course shortly",
        ];
    }
    public function courses(){
       return [
           "title" => 'Courses - FreeOnlineCourses.me - Download best online courses for free',
           "description" => "FreeOnlineCourses.me - here you can find and easely download free online courses with hight quality",
       ];
    }

    public function course($course){
        return [
            "title" => 'FreeOnlineCourses.me - ' . $course->title .' ',
            "description" => 'About Course - ' . $course->title .' ',
        ];
    }

}
