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

Route::get('/', function () { return redirect('/login');});
Route::get('/login', function () { return view('welcome');});
Route::get('/a', function () { return view('landing');});
Route::get('/a', [CheckpointController::class, 'create'])->name('admin.checkpoint');
Route::post('/admin/checkpoint/toggle', [CheckpointController::class, 'toggleStatus'])->name('checkpoint.toggle');


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

// View Admin
Route::get('admin/operator', [OperatorController::class, 'index'])->name('admin.operator');
Route::get('admin/checkpoint', [CheckpointController::class, 'index'])->name('admin.checkpoint');
Route::get('admin/robot', [RobotController::class, 'index'])->name('admin.robot');
// View Operator
Route::get('operator/dashboard', [OperatorController::class, 'operator'])->name('operator/dashboard');

// CRUD
// Create
Route::get('admin/create', [OperatorController::class, 'create'])->name('admin.create');
Route::post('admin/operator', [OperatorController::class, 'store'])->name('operator.store');

// Edit
Route::get('admin/{user}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
Route::put('admin/{user}', [OperatorController::class, 'update'])->name('operator.update');

Route::get('admin/{checkpoint}/edit', [CheckpointController::class, 'edit'])->name('checkpoint.edit');
Route::put('admin/{checkpoint}', [CheckpointController::class, 'update'])->name('checkpoint.update');

Route::get('admin/{robot}/edit', [RobotController::class, 'edit'])->name('robot.edit');
Route::put('admin/{robot}', [RobotController::class, 'update'])->name('robot.update');
// Delete
Route::delete('admin/{user}', [OperatorController::class, 'destroy'])->name('operator.destroy');
Route::delete('admin/{checkpoint}', [CheckpointController::class, 'destroy'])->name('checkpoint.destroy');
Route::delete('admin/{robot}', [RobotController::class, 'destroy'])->name('robot.destroy');


// Status CheckPoint

Route::post('/admin/checkpoint/toggle-status/{id}', [CheckpointController::class, 'toggleStatus'])->name('checkpoint.toggleStatus');