<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('/register',[AuthController::class,"register"]);
Route::post('/login',[AuthController::class,"login"]);
Route::post('/logout',[AuthController::class,"logout"])->middleware('auth:sanctum');
// Route::resource('doctors',DoctorController::class);
// Route::get('/appointments',[AppointmentController::class,'index']);
// Route::post('/appointments',[AppointmentController::class,'store']);
// Route::get('/dashboard',[DashboardController::class,'index']);
// Route::p
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
