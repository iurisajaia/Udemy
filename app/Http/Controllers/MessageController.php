<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller{
    
    // Send Message
    public function send(Request $request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text
        ]);

        return redirect('/');
    }

    // Get Messages
    public function index(){
        $messages = Message::all();

        return view('admin.messages')->with('messages' , $messages);
    }
}
