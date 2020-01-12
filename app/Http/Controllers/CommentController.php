<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller{
    
    public function store(Request $request){

        Comment::create([
            'text' => $request->text,
            'user_id' => $request->user_id,
            'course_id' => $request->course_id
        ]);

        return redirect()->back();
    }
}
