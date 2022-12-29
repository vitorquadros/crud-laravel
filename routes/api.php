<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\VaccineController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;


// USUÁRIOS --------------------------------------------------------------
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class)->middleware('auth:sanctum');

    // sem auth
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);


Route::post('/login', [AuthController::class, 'login'])->name('login');

// CONSULTAS --------------------------------------------------------------
Route::apiResource('appointments', AppointmentController::class)->parameters([
    'appointments' => 'appointment'
])->middleware('auth:sanctum');

    // sem auth
Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show']);

// MÉDICOS --------------------------------------------------------------
Route::apiResource('doctors', DoctorController::class)->parameters([
    'doctors' => 'doctor'
])->middleware('auth:sanctum');

    // dados aninhados
Route::get('doctors/{doctor}/appointments', [DoctorController::class, 'appointments']);

    // sem auth
Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/{doctor}', [DoctorController::class, 'show']);

// VACINAS --------------------------------------------------------------
Route::apiResource('vaccines', VaccineController::class)->parameters([
    'vaccines' => 'vaccine'
])->middleware('auth:sanctum');

    // sem auth
Route::get('/vaccines', [VaccineController::class, 'index']);
Route::get('/vaccines/{vaccine}', [VaccineController::class, 'show']);




