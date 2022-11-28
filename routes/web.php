<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// ----------------- DOCTORS -----------------

// GET ALL
Route::get('/doctors', [DoctorController::class, 'index']);

// CREATE
Route::get('/doctors/create', [DoctorController::class, 'create']);
Route::post('/doctors', [DoctorController::class, 'store']);

// GET ONE
Route::get('/doctors/{id}', [DoctorController::class, 'show']);

// UPDATE
Route::get('/doctors/update/${id}', [DoctorController::class, 'edit'])->name('edit');
Route::post('/doctors/{id}', [DoctorController::class, 'update'])->name('update');

// DELETE
Route::get('/doctors/delete/{id}', [DoctorController::class, 'destroy'])->name('delete');

// ----------------- VACCINES -----------------

// GET ALL
Route::get('/vaccines', [VaccineController::class, 'index']);

// CREATE
Route::get('/vaccines/create', [VaccineController::class, 'create']);
Route::post('/vaccines', [VaccineController::class, 'store']);

// GET ONE
Route::get('/vaccines/{id}', [VaccineController::class, 'show']);

// UPDATE
Route::get('/vaccines/update/${id}', [VaccineController::class, 'edit'])->name('edit_vaccine');
Route::post('/vaccines/{id}', [VaccineController::class, 'update'])->name('update_vaccine');

// DELETE
Route::get('/vaccines/delete/{id}', [VaccineController::class, 'destroy'])->name('delete_vaccine');

// ----------------- APPOINTMENTS -----------------

// GET ALL
Route::get('/appointments', [AppointmentController::class, 'index']);

// CREATE
Route::get('/appointments/create', [AppointmentController::class, 'create']);
Route::post('/appointments', [AppointmentController::class, 'store']);

// GET ONE
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);

// UPDATE
Route::get('/appointments/update/${id}', [AppointmentController::class, 'edit'])->name('edit_appointment');
Route::post('/appointments/{id}', [AppointmentController::class, 'update'])->name('update_appointment');

// DELETE
Route::get('/appointments/delete/{id}', [AppointmentController::class, 'destroy'])->name('delete_appointment');