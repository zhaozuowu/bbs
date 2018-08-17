<?php

namespace App\Http\Requests\Api;


use Dingo\Api\Http\FormRequest;

class CaptchasRequest extends FormRequest
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
            'phone' => 'required|string|regex:/^1[345678]\d{9}$/|unique:users',
        ];
    }

    public function attributes()
    {
        return [
            'phone' => "手机号"
        ];
    }

    public function messages()
    {
        return [
            //'phone.required' => "请填写手机号"
        ];
    }

}
