<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UsersRegisterRequest;
use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    //
    public function store(UsersRegisterRequest $request)
    {
        $verifacationCodesData = \Cache::get($request->verifacationKey);

        if (empty($verifacationCodesData)) {

            return $this->response->error("短信验证码失效", 401);
        }

        if (!hash_equals($verifacationCodesData['verifacationCode'], $request->verifacationCode)) {

            return $this->response->errorUnauthorized("短信验证码错误");
        }

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $verifacationCodesData['phone'],
        ]);

        return $this->response->created();
    }
}
