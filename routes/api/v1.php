<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\UsersController;
use App\Http\Controllers\Api\v1\ServiceController;
use App\Http\Controllers\Api\v1\AppointmentController;

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

Route::middleware('auth:api')->group(function () {
    Route::resource('user', UsersController::class, ['only' => ['index']]);
    Route::resource('service', ServiceController::class, ['only' => ['index', 'show']]);
    Route::resource('appointment', AppointmentController::class, ['except' => ['create', 'edit']]);
});

