<?php


namespace App\Repository\Category;


interface CategoryRepositoryInterface{

    public function all();
    public function create($request);

}
