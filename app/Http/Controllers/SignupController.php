<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{

      /**
       * Get a validator for an incoming registration request.
       *
       * @param  array  $data
       * @return \Illuminate\Contracts\Validation\Validator
       */
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
           'first_name' => 'required|string|max:255',
           'last_name' => 'required|string|max:255',
           'title' => 'required|string|max:255',
           'role'=>'required|string|in:Teacher,Parent,Leader,Student',
           'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:6',
       ]);
        if ($validation->fails()) {
            return response()->json(['status'=>'failed','errors'=>$validation->errors()], 500);
        }
        $user =  $this->create($request->all());
        if (!$user) {
          return response()->json(['status'=>'failed','errors'=>$validation->errors()], 500);
        }
        Auth::guard()->login($user);
        return response()->json(['status'=>'Authenticated','_token'=>$user->api_token], 200);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    private function create(array $data)
    {
        return User::create([
              'first_name' => $data['first_name'],
              'last_name' => $data['last_name'],
              'title' => $data['title'],
              'role'=>$data['role'],
              'activation_token'=>str_random(36),
              'api_token'=>str_random(36),
              'email' => $data['email'],
              'password' => bcrypt($data['password']),
          ]);
    }

}
