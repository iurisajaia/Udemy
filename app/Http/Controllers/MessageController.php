<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;
use App\Repository\Message\MessageRepositoryInterface;

class MessageController extends Controller{

    private $messageRepository;

    public function __construct(
        MessageRepositoryInterface $messageRepository
    ){
        $this->messageRepository = $messageRepository;
    }
    // Send Message
    public function send(Request $request){
        $this->messageRepository->create($request);

        return redirect('/');
    }

    // Get Messages
    public function index(){
        return view('admin.messages')->with('messages' , $this->messageRepository->all());
    }
}
