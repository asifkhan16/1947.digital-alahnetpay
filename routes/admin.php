<?php

use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\DepositMethodController;
use App\Http\Controllers\Admin\HoldController;
use App\Http\Controllers\Admin\MerchantController;

Route::group(['middleware' => ["auth", 'role:Admin'], 'prefix' => "admin"], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    // kyc's routes

    Route::get('/kyc-verification', [KycController::class, 'index'])->name('kyc_verification.index');
    Route::get('/kyc-verification/{kyc}', [KycController::class, 'ApproveOrRejectKyc'])->name('kyc_verification.update.status');

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

    Route::get('/hold-transactions', [HoldController::class, 'index'])->name('hold-transaction.index');
    Route::get('/hold-transactions/{hold_transaction}/approve', [HoldController::class, 'approveHoldTransaction'])->name('hold-transaction.approve');
    Route::get('/hold-transactions/{hold_transaction}/reject', [HoldController::class, 'rejectHoldTransaction'])->name('hold-transaction.reject');

    //Card Routes
    Route::get('/cards', [CardController::class, 'index'])->name('card.index');
    Route::get('/cards/{card}', [CardController::class, 'ApproveOrRejectCard'])->name('card.update.status');

    // Merchant Routes
    Route::get('/merchants', [MerchantController::class, 'index'])->name('merchant.index');
    Route::get('/merchants/approved/{merchant}', [MerchantController::class, 'index'])->name('merchant.approved');
    Route::get('/merchants/reject/{merchant}', [MerchantController::class, 'index'])->name('merchant.reject');

});
