<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use \App\User;

class UsersController extends Controller
{
    //
    public $successStatus = 200;

    function create(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('RankUp')->accessToken;
        $success['email'] = $user->email;
        return response()->json(['success'=>$success], $this->successStatus);
    }

}
