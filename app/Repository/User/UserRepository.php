<?php


namespace App\Repository\User;


use App\User;

class UserRepository implements UserRepositoryInterface{

    public function singleUser($id){
        return  User::where('id' , $id)->firstOrFail();
    }

    public function updateUser($user, $request){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
}
