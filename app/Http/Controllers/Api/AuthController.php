<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use \App\User;

class AuthController extends Controller
{

  public function register(Request $request){

    // $validated = $request->validate([
    //   'email' => 'required',
    //   'password' => 'required'
    // ]);

    // $user = User::firstOrNew(['email'=>$request->email]);
    // $user->email = $request->email;
    // $user->password = bcrypt($request->password);
    // $user->save();

    // $http = new Client;

    // $request->request->add([
    //   'grant_type' => 'password',
    //       'client_id' => '2',
    //       'client_secret' => '5n053udMlMksA1AyVmLUxoxTVr2Algnm4aTRjkQk',
    //       'username' => $request->email,
    //       'password' => $request->password,
    //       'scope' => '',
    // ]);

    // $tokenRequest = Request::create(url('oauth/token'), 'post');

    // $response = \Route::dispatch($tokenRequest);


    // return response($response, 200);

    echo $request->email;

    echo $request->password;

    $http = new Client();

    $response = $http->post('http://rankup.dinmor/oauth/token', [
      'form_params' => [
        'grant_type' => 'password',
        'client_id' => '2',
        'client_secret' => '5n053udMlMksA1AyVmLUxoxTVr2Algnm4aTRjkQk',
        'username' => $request->email,
        'password' => $request->password,
        'scope' => '',
      ],
    ]);

    dd($response);

    return json_decode((string) $response->getBody(), true);
  }


  public function login(Request $request){
    $user = User::where('email', $request->email)->first();

    if($user){
      if(Hash::check($request->password, $user->password)){
        $token = $user->createToken('Laravel Password Grant Glient')->accessToken;
        $response = ['access_token' => $token];
        return response($response, 200);
      } else {
        $response = 'Password mismatch';
        return response($response, 422);
      }

    } else {
      $response = 'User doesn\'t exist';
      return response($response, 422);
    }
  }



  // public function login(Request $request){
  //   $request->validate([
  //     'email' => 'required',
  //     'password' => 'required'
  //   ]);

    
  //   $user = User::where('email', $request->email)->first();

  //   if(!$user)
  //     return response(['status'=>'error', 'message'=>'User not found']);

  //   if(Hash::check($request->password, $user->password)){
  //     $request->request->add([
  //       'grant_type' => 'password',
  //           'client_id' => '2',
  //           'client_secret' => '5n053udMlMksA1AyVmLUxoxTVr2Algnm4aTRjkQk',
  //           'username' => $request->email,
  //           'password' => $request->password,
  //           'scope' => '',
  //     ]);

  //   $tokenRequest = Request::create(url('oauth/token'), 'post');

  //   $response = \Route::dispatch($tokenRequest);

  //   return $response;
  //   }
  // }

}