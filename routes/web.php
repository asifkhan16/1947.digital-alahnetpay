<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepositMethodController;
use App\Http\Controllers\Admin\KycController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\EcsrowController;
use App\Http\Controllers\User\MerchantController;
use App\Http\Controllers\User\WalletController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ["auth", "role:User"], 'prefix' => 'user'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard.index');

    // wallet Routes
    Route::get('/wallets', [WalletController::class, 'index'])->name('user.wallets');
    // send local transfer routes
    Route::get('/wallets/send/{wallet}', [WalletController::class, 'send'])->name('user.wallet.send');
    Route::get('/wallets/send/local-transfer/{wallet}', [WalletController::class, 'createLocal_tranfer'])->name('user.wallet.send.local_transfer');
    Route::post('/wallets/send/local-transfer/{wallet}', [WalletController::class, 'send_Local_tranfer'])->name('user.wallet.send.local_transfer.submit');
    // Wallet transaction route
    Route::get('/wallets/transaction/{wallet}', [WalletController::class, 'walleTransactions'])->name('user.wallet.transactions');

    // Escrow
    Route::get('/escrow', [EcsrowController::class, 'index'])->name('user.escrow');
    Route::get('/escrow/transacation', [EcsrowController::class, 'transactionIndex'])->name('user.escrow.transaction');
    Route::get('/escrow/create', [EcsrowController::class, 'create'])->name('user.escrow.create');
    Route::post('/escrow/store', [EcsrowController::class, 'store'])->name('user.escrow.store');
    Route::get('/escrow/accept/{escrow}', [EcsrowController::class, 'acceptEscrow'])->name('user.escrow.accept');
    Route::get('/escrow/reject/{escrow}', [EcsrowController::class, 'rejectEscrow'])->name('user.escrow.reject');
    Route::get('/escrow/release/{escrow}', [EcsrowController::class, 'releaseEscrow'])->name('user.escrow.release');

    // aplhaCard
    Route::get('/alphacard', [CardController::class, 'index'])->name('user.card');
    Route::get('/alphacard/create', [CardController::class, 'create'])->name('user.card.create');
    Route::post('/alphacard/store', [CardController::class, 'store'])->name('user.card.store');

    // merchant
    Route::get('/merchant',[MerchantController::class, 'index'])->name('user.merchant');
    Route::post('/merchant/store',[MerchantController::class, 'store'])->name('user.merchant.store');
});
require __DIR__ . '/auth.php';
