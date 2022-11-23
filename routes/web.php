<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);
Route::post('/doctors', [DoctorController::class, 'store']);

Route::get('/vaccines', [VaccineController::class, 'index']);
Route::get('/vaccines/{id}', [VaccineController::class, 'show']);
Route::post('/vaccines', [VaccineController::class, 'store']);

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);
Route::post('/appointments', [AppointmentController::class, 'store']);