<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\VaccineController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('appointments', AppointmentController::class)->parameters([
    'appointments' => 'appointment'
]);

Route::apiResource('doctors', DoctorController::class)->parameters([
    'doctors' => 'doctor'
]);

Route::apiResource('vaccines', VaccineController::class)->parameters([
    'vaccines' => 'vaccine'
]);

// dados aninhados
Route::get('doctors/{doctor}/appointments', [DoctorController::class, 'appointments']);


