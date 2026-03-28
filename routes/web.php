<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/register',[AuthController::class,"register"]);
// Route::post('/login',[AuthController::class,"login"]);
Route::get('/register',function(){
    return view('signup.index');
});
Route::get('/login', function(){
    return view('login.index');
});
Route::get('/dashboard', function(){
    return view('login.index');
});
Route::get('/dashboard' ,function(){
    return view('dashboard.index');
});
Route::get('/doctors' ,function(){
    return view('doctors.index');
});
Route::get('/doctors/create' ,function(){
    return view('doctors.create');
});
Route::get('/appointements' ,function(){
    return view('appointments.index');
});
Route::get('/appointments/create', [AppointmentController::class, 'create']);
Route::resource('doctors',DoctorController::class);
Route::get('/appointments',[AppointmentController::class,'index']);
Route::post('/appointments',[AppointmentController::class,'store']);
Route::get('/dashboard',[DashboardController::class,'index']);
Route::post('/appointments/{id}/complete',[AppointmentController::class,'updateStatus']);
