<?php

use App\Http\Controllers\Staff;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('/');
Route::prefix('Staff')->name('Staff.')->group(function () {
    Route::middleware(['guest:staff'])->group(function () {
        Route::controller(Staff\AuthController::class)->group(function () {
            Route::get('/SignIn', 'loginDetails')->name('loginPage');
            Route::get('/RegisterPage', 'RegisterPage')->name('RegisterPage');
            Route::post('/Login', 'Login')->name('Login');
            Route::post('/Register', 'Register')->name('Register');
        });
    });
    Route::middleware(['auth:staff'])->group(function () {
        Route::view('/home','welcome')->name('home');
        Route::get('/Logout', [Staff\AuthController::class, 'logout'])->name('logout');
    });
});
Route::prefix('User')->name('User.')->group(function () {
    Route::middleware(['guest:user'])->group(function () {
        Route::controller(User\AuthController::class)->group(function () {
            Route::get('/SignIn', 'loginDetails')->name('loginPage');
            Route::get('/RegisterPage', 'RegisterPage')->name('RegisterPage');
            Route::post('/Login', 'Login')->name('Login');
            Route::post('/Register', 'Register')->name('Register');
        });
    });
    Route::middleware(['auth:user'])->group(function () {
        Route::view('/home','welcome')->name('home');
        Route::get('/Logout', [User\AuthController::class, 'logout'])->name('logout');
    });
});
