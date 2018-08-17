<?php

namespace App\Http\Requests\Api;


use Dingo\Api\Http\FormRequest;

class UsersRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'string|required|max:255',
            'password'=>'string|required|min:6',
            'email' => 'required|email|unique:users',
            'verifacationKey'=>'required',
            'verifacationCode'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'verifacationKey' => '短信验证码key',
            'verifacationCode' => '短信验证码'
        ];
    }
}
