<?php


use App\Models\User;

use App\Http\Controllers\Admin\DepositMethodController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth','role:Admin'], 'prefix' => 'admin'] ,function(){

    Route::resource('/deposit_method', DepositMethodController::class);

  
});

   Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::get('/user/profile/show', [ProfileController::class, 'show'])->name('user.profile.show');
    Route::post('/user/profile/update', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    
});

require __DIR__ . '/auth.php';
