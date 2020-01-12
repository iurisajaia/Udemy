<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{

    protected $fillable = [ 'title' , 'author' , 'description' , 'image', 'file'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
