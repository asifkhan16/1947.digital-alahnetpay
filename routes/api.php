<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\Auth\AuthController;

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
Route::group(['prefix' => 'admin/v1'],function(){
    Route::post('/login', [AuthController::class, 'login']);
});
Route::get('/test', function () {
    $data = [
        'success' => true,
        'message' => 'hello world',
    ];
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
