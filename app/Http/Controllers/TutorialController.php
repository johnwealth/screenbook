<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    


 public function index()
     {
        return view('tutorial');
    }    

    /**
     * Get a validator for an incoming email for update request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator()
    // {
    //     return Validator::make('email' => 'required|string|email|max:255|unique:users');
    // }


       /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // public function createNewsUpdate($validator)
    // {
    //     return 12345;
    // }


}
