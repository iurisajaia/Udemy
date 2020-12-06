<?php


namespace App\Repository\User;


interface UserRepositoryInterface{
    public function singleUser($id);
    public function updateUser($user,$request);

}
