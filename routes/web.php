<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
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

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', function () {
    return view('welcome');
});
Route::post('/admin/checkpoint/toggle', [CheckpointController::class, 'toggleStatus'])->name('checkpoint.toggle');


// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Rute untuk halaman admin
Route::middleware(['auth', 'cek:admin'])->group(function () {
    Route::get('/admin/operator', function () {
        return view('admin.operator');
    })->name('admin.operator');

    Route::get('admin/operator', [OperatorController::class, 'index'])->name('admin.operator');
    Route::get('admin/checkpoint', [CheckpointController::class, 'index'])->name('admin.checkpoint');
    Route::get('admin/robot', [RobotController::class, 'index'])->name('admin.robot');


    Route::post('admin/operator', [OperatorController::class, 'store'])->name('operator.store');
Route::post('admin/checkpoint', [CheckpointController::class, 'store'])->name('checkpoint.store');
Route::post('admin/robot', [RobotController::class, 'store'])->name('robot.store');

    Route::put('admin/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
    Route::put('admin/checkpoint/{id}', [CheckpointController::class, 'update'])->name('checkpoint.update');
    Route::put('admin/robot/{id}', [RobotController::class, 'update'])->name('robot.update');

    Route::delete('admin/{user}', [OperatorController::class, 'destroy'])->name('operator.destroy');
    Route::delete('admin/{checkpoint}', [CheckpointController::class, 'destroy'])->name('checkpoint.destroy');
    Route::delete('admin/{robot}', [RobotController::class, 'destroy'])->name('robot.destroy');
});

// Rute untuk halaman operator
Route::middleware(['auth', 'cek:operator'])->group(function () {
    Route::get('/operator/dashboard', function () {
        return view('operator.dashboard');
    })->name('operator/dashboard');
    Route::get('operator/dashboard', [OperatorController::class, 'operator'])->name('operator/dashboard');
});

// View Admin
Route::get('admin/operator', [OperatorController::class, 'index'])->name('admin.operator');
Route::get('admin/checkpoint', [CheckpointController::class, 'index'])->name('admin.checkpoint');
Route::get('admin/robot', [RobotController::class, 'index'])->name('admin.robot');
// View Operator
Route::get('operator/dashboard', [OperatorController::class, 'operator'])->name('operator/dashboard');

// CRUD
// Create
