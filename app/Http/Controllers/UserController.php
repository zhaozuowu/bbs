<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('users.signup');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'username'=>'required|max:255',
           'email'=>'required|email|unique:users|max:255',
           'password'=>'required|confirmed|min:6',
        ]);
    }



    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
}
