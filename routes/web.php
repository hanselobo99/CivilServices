<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff;
use App\Http\Controllers\User;
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
Route::prefix('Staff')->name('Staff.')->group(function (){
    Route::controller(Staff\AuthController::class)->group(function (){
        Route::get('/SignIn','loginDetails')->name('loginPage');
        Route::get('/RegisterPage','RegisterPage')->name('RegisterPage');
        Route::post('/Login','Login')->name('Login');
        Route::post('/Register','Register')->name('Register');
        Route::get('/Logout','logout')->name('logout');
    });
});
Route::prefix('User')->name('User.')->group(function (){
    Route::controller(User\AuthController::class)->group(function (){
        Route::get('/SignIn','loginDetails')->name('loginPage');
        Route::get('/RegisterPage','RegisterPage')->name('RegisterPage');
        Route::post('/Login','Login')->name('Login');
        Route::post('/Register','Register')->name('Register');
        Route::get('/Logout','logout')->name('logout');
    });
});
