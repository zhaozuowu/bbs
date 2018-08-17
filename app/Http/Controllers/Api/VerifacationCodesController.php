<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\VerifacationCodesRequest;
use Illuminate\Http\Request;
use Overtrue\EasySms\EasySms;
use Overtrue\EasySms\Exceptions\NoGatewayAvailableException;


class VerifacationCodesController extends Controller
{
    //
    public function store(VerifacationCodesRequest $request, EasySms $easySms)
    {

        $captchasData = \Cache::get($request->captchasKey);

        if (empty($captchasData)) {

            return $this->response->error("图片验证码失效", 422);
        }
        if (!hash_equals($captchasData['captchas'], $request->captchasCode)) {

            return $this->response->errorUnauthorized("图片验证码有误");
        }

        try {
            $code = str_pad(random_int(1, 999999), 6, 0, STR_PAD_LEFT);
            $phone = $captchasData['phone'];

            $easySms->send($phone, [
                'content' => "【赵作武】您的验证码是{$code}。如非本人操作，请忽略本短信"
            ]);

        } catch (NoGatewayAvailableException $exception) {
            $message = $exception->getException('yunpian')->getMessage();

            return $this->response->errorInternal($message);
        }

        $key = 'verifacationCodes_' . str_random(15);
        $expireDate = now()->addMinutes(1);

        \Cache::put($key, ['phone' => $phone, 'verifacationCode' => $code], $expireDate);

        $result = [
            'expiredDate' => $expireDate->toDateTimeString(),
            'verifacationKey' => $key,
        ];

        return $this->response->array($result)->setStatusCode(201);

    }
}
