<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard_test', function () {
    return view('dashboard_test');
})->name('dashboard');

Route::group(['middleware' => ["auth",'role:Admin'],'prefix' => "admin"], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/kyc-verification', [KycController::class, 'index'])->name('users.kyc-verification');
    Route::get('/users/kyc-verification/pending', [KycController::class, 'kyc_pending'])->name('users.kyc-verification.pending');
    Route::get('/users/kyc-verification/canceled', [KycController::class, 'kyc_canceled'])->name('users.kyc-verification.canceled');
    Route::get('/users/kyc-verification/completed', [KycController::class, 'kyc_completed'])->name('users.kyc-verification.completed');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
