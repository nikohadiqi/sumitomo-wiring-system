<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RFIDController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/token', function () {
    return csrf_token(); 
});
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'proses_login'])->name('proses_login');

Route::get('/save_rfid_data', [RFIDController::class, 'index']);
Route::post('/save_rfid_data', [RFIDController::class, 'store']);

Route::post('/data', [ApiController::class, 'store']);
