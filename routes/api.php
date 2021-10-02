<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideoController;

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

Route::group([
    'prefix' => 'v1'
],function(){
    Route::post('registration', [AuthController::class, 'registration']);
    Route::post('login', [AuthController::class, 'login']);
});



Route::group([
    'middleware' => 'auth.jwt',
    'prefix' => 'v1'
], function () {
    Route::post('video', [VideoController::class, 'create']);
    Route::put('video/{id}/like', [VideoController::class, 'like']);
    Route::get('liked/videos', [VideoController::class, 'getLikes']);
});
