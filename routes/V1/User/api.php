<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\User\Auth\AuthController;
use App\Http\Controllers\Api\V1\User\ProfileController;

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
    Route::post('/change-password',     [AuthController::class , 'change_password']);
    Route::post('/profile/create',     [ProfileController::class , 'store']);
    Route::post('/profile/update',     [ProfileController::class , 'update']);

});
