<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RobotController;

Route::get('/robot/battery', [RobotController::class, 'getBatteryData']);
