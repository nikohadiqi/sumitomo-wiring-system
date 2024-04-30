<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\KaryawanAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KaryawanDashboardController;

// Tampilan Login
Route::get('/', function () {
    return view('login');
})->name('login');

// Proses Login Admin
Route::post('/login/admin', [AdminAuthController::class, 'login'])->name('admin.login');

// Proses Login Karyawan
Route::post('/login/karyawan', [KaryawanAuthController::class, 'login'])->name('karyawan.login');

// Proses Logout
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// Admin Dashboard (setelah login sebagai admin)
Route::middleware(['auth:admin'])->group(function () {
    Route::post('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Karyawan Dashboard (setelah login sebagai karyawan)
Route::middleware(['auth:karyawan'])->group(function () {
    Route::post('/karyawan/dashboard', [KaryawanDashboardController::class, 'index'])->name('karyawan.dashboard');
});
