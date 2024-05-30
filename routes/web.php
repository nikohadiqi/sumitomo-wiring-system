<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\Operator1Controller;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RobotController;
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

Route::resource('admin/operator', OperatorController::class)->names([
    'index' => 'admin.operator',
    'create' => 'admin.create',
    'store' => 'operator.store',
    'show' => 'operator.show',
    'edit' => 'operator.edit',
    'update' => 'operator.update',
    'destroy' => 'operator.destroy',
]);

Route::resource('admin/checkpoint', CheckpointController::class)->names([
    'index' => 'admin.checkpoint',
    'create' => 'admin.create',
    'store' => 'checkpoint.store',
    'show' => 'checkpoint.show',
    'edit' => 'checkpoint.edit',
    'update' => 'checkpoint.update',
    'destroy' => 'checkpoint.destroy',
]);