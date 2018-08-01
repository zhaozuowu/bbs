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

      $user =   User::create([
           'name' => $request->username,
           'email' => $request->email,
           'password' => bcrypt($request->password),
        ]);
        session()->flash('success','恭喜你注册成功');
        return redirect()->route('users.show',[$user]);
    }



    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function register()
    {
        $user ="<div><h1>测试</h1></div>";
        return view('users.register',compact('user'));
    }

    public function zhuce()
    {
        return view('users.zhuce');
    }
}
