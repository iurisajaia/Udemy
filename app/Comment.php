<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{

    protected $fillable = [ 'text' , 'user_id' , 'course_id' ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
