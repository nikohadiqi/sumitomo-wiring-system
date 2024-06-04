<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () { return redirect('/login');});
Route::get('/login', function () { return view('welcome');});

// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('proses_login', [LoginController::class,'proses_login'])->name('proses_login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');


// Rute untuk halaman admin
Route::middleware(['auth', 'cek:admin'])->group(function () {
    Route::get('/admin/operator', function () {
        return view('admin.operator');
    });
});

// Rute untuk halaman operator
Route::middleware(['auth', 'cek:operator'])->group(function () {
    Route::get('/operator/dashboard', function () {
        return view('operator.dashboard');
    });
});
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

Route::resource('admin/robot', RobotController::class)->names([
    'index' => 'admin.robot',
    'create' => 'admin.create',
    'store' => 'checkpoint.store',
    'show' => 'checkpoint.show',
    'edit' => 'checkpoint.edit',
    'update' => 'checkpoint.update',
    'destroy' => 'checkpoint.destroy',
]);