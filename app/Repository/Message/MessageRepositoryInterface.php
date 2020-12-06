<?php


namespace App\Repository\Message;


interface MessageRepositoryInterface{
    public function saveMessage($email);
    public function create($request);
}
