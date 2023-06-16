<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\User\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login',        [AuthController::class , 'login']);
Route::post('/register',     [AuthController::class , 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/profile/create',     [AuthController::class , 'storeProfile']);

});
