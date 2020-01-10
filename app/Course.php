<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [ 'title' , 'author' , 'description' , 'image', 'file'];
}
