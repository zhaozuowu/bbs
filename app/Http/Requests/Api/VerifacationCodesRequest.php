<?php

namespace App\Http\Requests\Api;


use Dingo\Api\Http\FormRequest;

class VerifacationCodesRequest extends FormRequest
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
            'captchasKey' => 'string|required',
            'captchasCode' => 'string|required',
        ];


    }

    public function attributes()
    {
        return [
            'captchasKey' => '图片验证码key',
            'captchasCode' => '图片验证码'
        ];
    }
}

