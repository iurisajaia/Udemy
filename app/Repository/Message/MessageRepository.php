<?php


namespace App\Repository\Message;


use App\Message;

class MessageRepository implements MessageRepositoryInterface {
    public function saveMessage($email){
        $subscribe = Message::create([
            'name' => 'subscribe',
            'email' => $email,
            'text' => 'subscribe'
        ]);

        $subscribe->save();
    }

    public function create($request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text
        ]);
    }

    public function all(){
        return Message::orderBy('id' , 'desc')->get();
    }
}
