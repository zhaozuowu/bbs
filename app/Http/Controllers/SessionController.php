<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login()
    {
        return view('session.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required|min:6',
        ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            session()->flash('success','欢迎回来');
            return redirect()->route('users.show',[Auth::user()]);
        }

        session()->flash('danger','用户名或者密码不符合');
        return redirect()->back();
    }
}
