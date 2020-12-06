<?php


namespace App\Repository\Seo;


interface SeoRepositoryInterface{

    public function home();
    public function about();
    public function contact();
    public function courses();
    public function course($course);
    public function search();
    public function userProfile($userName);

}
