<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /**
     * UserController constructor.
     */
    public function __construct()
    {
    }

    public function signup()
    {
       return view('user.signup');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'username'=>'required|max:255',
           'email'=>'required|email|unique:users|max:255',
           'password'=>'required|confirmed|max:255',
        ]);
    }
}
