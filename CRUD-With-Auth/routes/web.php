<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMail;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use App\Http\Controllers\LoginController;

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
Route::view('/nav','navigation');
Route::get('/',[CustomerController::class,'index']);
Route::resource('kirimEmail', SendMail::class);

Route::get('/oauth/gmail', function () {
    return LaravelGmail::redirect();
});

Route::get('/oauth/gmail/callback', function () {
    LaravelGmail::makeToken();
    return redirect()->to('/');
});

Route::get('/oauth/gmail/logout', function () {
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});
Route::resource('customer',App\Http\Controllers\CustomerController::class);
Route::get('/login',[LoginController::class,'formLogin'])->name('login');
Route::post('/login',[LoginController::class,'postLogin'])->name('login');
Route::get('/logout',[LoginController::class,'logout']);