<?php


namespace App\Repository\Category;
use App\Category;

class CategoryRepository implements CategoryRepositoryInterface{


    public function all(){
        return Category::all();
    }


}
