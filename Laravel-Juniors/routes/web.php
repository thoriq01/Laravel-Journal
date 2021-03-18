<?php

use App\Http\Controllers\UserBaruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\UserBaru;

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

Route::get('/',[UserBaruController::class, 'loginForm']);
Route::post('/postRegister',[UserBaruController::class,'createUser'])->name('createUser');
Route::get('/postRegister',[UserBaruController::class,'getRegister'])->name('createUser');
Route::get('/loginForm',[UserBaruController::class,'loginForm'])->name('getFormLogin');
Route::get('/logout',[UserBaruController::class,'logout'])->name('logout');
Route::post('/postLogin',[UserBaruController::class,'postLogin'])->name('postLogin');
Route::get('/getLogin',[UserBaruController::class,'index'])->name('getLogin');

Route::group(['middleware' => ['auth','role']],function(){
    Route::get('/admin',function(){
        return view('admin.dashboard')->name('admin');
    });
    Route::get('/user',function(){
        return view('users.dashboard')->name('users');
    });
});