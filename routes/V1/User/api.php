<?php

use App\Http\Controllers\Api\V1\User\CardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\User\Auth\AuthController;
use App\Http\Controllers\Api\V1\User\DepositController;
use App\Http\Controllers\Api\V1\User\KycVerificationController;
use App\Http\Controllers\Api\V1\User\ProfileController;
use App\Http\Controllers\Api\V1\User\WalletController;

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

Route::post('/login',        [AuthController::class, 'login']);
Route::post('/register',     [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/change-password',     [AuthController::class, 'change_password']);
    Route::post('/profile/create',      [ProfileController::class, 'store']);
    Route::post('/profile/update',      [ProfileController::class, 'update']);
    Route::post('/kyc-verification',    [KycVerificationController::class, 'store']);

    // wallet routes
    Route::get('currencies', [WalletController::class, 'getCurrencies']);
    Route::get('wallet/show', [WalletController::class, 'show']);
    Route::post('wallet/store', [WalletController::class, 'store']);
    Route::post('wallet/transfer/local', [WalletController::class, 'local_transfer']);

    //transactions
    Route::get('/deposit_methods',         [DepositController::class, 'index']);
    Route::post('/choose_depostit_method', [DepositController::class, 'chooseDepositMethod']);
    Route::post('/bankDeposit',            [DepositController::class, 'BankDeposit']);


    Route::post('/card/store',            [CardController::class, 'store']);

});
