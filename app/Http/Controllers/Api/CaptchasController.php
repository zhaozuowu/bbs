<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CaptchasRequest;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;


class CaptchasController extends Controller
{
    //

    public function store(CaptchasRequest $request, CaptchaBuilder $captchaBuilder)
    {
        $phone = $request->phone;
        $expireDate = now()->addMinutes(10);
        $captcha = $captchaBuilder->build();
        $key = 'captchas_' . str_random(15);
        \Cache::put($key, ['phone' => $phone, 'captchas' => $captcha->getPhrase()], $expireDate);

        $result = [
            'captchasKey' => $key,
            'expireDate' => $expireDate->toDateTimeString(),
            'captchasImg' => $captcha->inline(),
        ];

        return $this->response->array($result)->setStatusCode(201);

    }
}


