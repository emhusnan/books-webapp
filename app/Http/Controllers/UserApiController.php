<?php

namespace App\Http\Controllers;

class UserApiController extends Controller
{
    public function listUsers()
    {
        return response()->json(['status' => 'OK','message'=>'//TODO: listUsers']);
    }

    public function createUser()
    {
        return response()->json(['status' => 'OK','message'=>'//TODO: createUser']);
    }

    public function updateUser()
    {
        return response()->json(['status' => 'OK','message'=>'//TODO: updateUser']);
    }

    public function deleteUser()
    {
        return response()->json(['status' => 'OK','message'=>'//TODO: deleteUser']);
    }
}
