<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Operator1Controller;
use App\Http\Controllers\OperatorController;
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
    return view('welcome');
});

Route::get('/a', [OperatorController::class, 'index'])->name('admin.operator');
Route::get('/admin/checkpoint', [AdminController::class, 'checkpoint'])->name('admin.checkpoint');
Route::get('/admin/robot', [AdminController::class, 'robot'])->name('admin.robot');

Route::resource('admin/operator', OperatorController::class);


