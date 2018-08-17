<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$app = app('Dingo\Api\Routing\Router');

$app->version("v2", [
    'namespace' => 'App\Http\Controllers\Api',
], function ($api) {

    $api->group([
        'middleware' => 'api.throttle',
        'expires' => config('api.throttles.sign.expires'),
        'limit' => config('api.throttles.sign.limit'),
    ], function ($api) {
        $api->post('captchas', 'CaptchasController@store')->name('api.captchas.store');
        $api->post('verifacationCodes', 'VerifacationCodesController@store')->name('api.verifacationCodes.store');
        $api->post('users', 'UsersController@store')->name('api.users.store');

    });

});
