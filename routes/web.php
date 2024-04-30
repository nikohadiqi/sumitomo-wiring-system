<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\LoginController;

Route::get('login', 'AdminAuthController@showLoginForm')->name('admin.login');
Route::prefix('admin')->group(function () {
    // Rute untuk menampilkan formulir login

    // Rute untuk memproses formulir login
    Route::post('login', 'AdminAuthController@login')->name('admin.login.submit');
    // Rute untuk logout
    Route::post('logout', 'AdminAuthController@logout')->name('admin.logout');
});

Route::prefix('user')->group(function () {
    // Rute untuk menampilkan formulir login
    Route::get('login', 'UserAuthController@showLoginForm')->name('user.login');
    // Rute untuk memproses formulir login
    Route::post('login', 'UserAuthController@login')->name('user.login.submit');
    // Rute untuk logout
    Route::post('logout', 'UserAuthController@logout')->name('user.logout');
});
