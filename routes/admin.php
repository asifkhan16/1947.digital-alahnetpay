<?php

use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\DepositMethodController;




Route::group(['middleware' => ["auth", 'role:Admin'], 'prefix' => "admin"], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    // kyc's routes
    Route::get('/users/kyc-verification', [KycController::class, 'index'])->name('users.kyc-verification');
    Route::get('/users/kyc-verification/pending', [KycController::class, 'kyc_pending'])->name('users.kyc-verification.pending');
    Route::get('/users/kyc-verification/canceled', [KycController::class, 'kyc_canceled'])->name('users.kyc-verification.canceled');
    Route::get('/users/kyc-verification/completed', [KycController::class, 'kyc_completed'])->name('users.kyc-verification.completed');

    // deposit methods routes
    Route::get('/deposit-methods', [DepositMethodController::class, 'index'])->name('deposit-methods');
    Route::get('/deposit-method/create', [DepositMethodController::class, 'create'])->name('deposit-method.create');
    Route::post('/deposit-method/store', [DepositMethodController::class, 'store'])->name('deposit-method.store');
    Route::get('/deposit-method/{deposit_method}/edit', [DepositMethodController::class, 'edit'])->name('deposit-method.edit');
    Route::post('/deposit-method/{method}/update', [DepositMethodController::class, 'edit'])->name('deposit-method.update');


    //Deposit Routes

    Route::get('/deposits', [DepositController::class, 'index'])->name('deposit.index');
    Route::get('/deposits/{transaction}', [DepositController::class, 'ApproveOrRejectTransaction'])->name('deposit.update.status');

    //Currencies Routes
    Route::resource('/currencies', CurrencyController::class);

    //Card Routes
    Route::get('/cards', [CardController::class, 'index'])->name('card.index');
    Route::get('/cards/{card}', [CardController::class, 'ApproveOrRejectCard'])->name('card.update.status');
});