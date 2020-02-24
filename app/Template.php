<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [ 'title' , 'description' , 'image', 'file_url' ,'udemy_url'];

}
