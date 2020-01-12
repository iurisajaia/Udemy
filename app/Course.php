<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{

    protected $fillable = [ 'title' , 'author' , 'description' , 'image', 'file' ,'category_id'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
