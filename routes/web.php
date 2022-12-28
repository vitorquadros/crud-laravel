<?php


use App\Http\Controllers\DoctorController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Models\Appointment;
use App\Models\Vaccine;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing', ['doctors' => Doctor::all()]);
})->name('landing');

// DASHBOARD

Route::get('/dashboard', function () {
    return view('dashboard', 
    [
        'appointments' => Appointment::all(), 
        'vaccines' => Vaccine::all(), 
        'users' => User::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/appointment/{id}', function ($id) {
    return view('pages.appointment.single-dash',['appointment'=>Appointment::find($id) ]);
})->middleware(['auth', 'verified'])->name('appointment.single-dash');

// PROFILE

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

// ----------------- DOCTORS -----------------


// livewire
Route::get('/dashboard/doctor/{id}', function ($id) {
    return view('pages.doctor.single-dash',['doctor'=>Doctor::find($id) ]);
})->middleware(['auth', 'verified'])->name('doctor.single-dash');
// ----------

Route::middleware('auth')->controller(DoctorController::class)->group(function () {
    Route::prefix('/doctors')->group(function () {
        Route::get('/', 'index')->name('doctors');
        Route::get('/{id}', 'show')->name('single-doctor');
    });

    Route::prefix('/doctor')->middleware('auth')->group(function () {
        Route::get('/', 'create');
        Route::post('/', 'store');

        Route::get('/{id}/edit', 'edit')->name('edit_doctor');
        Route::post('/{id}/update', 'update')->name('update_doctor');

        Route::get('/{id}/delete', 'delete')->name('delete_doctor');
        Route::post('/{id}/remove', 'remove')->name('remove_doctor');
    });
});


// ----------------- VACCINES -----------------

// livewire
Route::get('/dashboard/vaccine/{id}', function ($id) {
    return view('pages.vaccine.single-dash',['vaccine'=>Vaccine::find($id) ]);
})->middleware(['auth', 'verified'])->name('vaccine.single-dash');
// ----------

Route::middleware('auth')->controller(VaccineController::class)->group(function () {
    Route::prefix('/vaccines')->group(function () {
        Route::get('/', 'index')->name('vaccines');
        Route::get('/{id}', 'show');
    });

    Route::prefix('/vaccine')->middleware('auth')->group(function () {
        Route::get('/', 'create');
        Route::post('/', 'store');

        Route::get('/{id}/edit', 'edit')->name('edit_vaccine');
        Route::post('/{id}/update', 'update')->name('update_vaccine');

        Route::get('/{id}/delete', 'delete')->name('delete_vaccine');
        Route::post('/{id}/remove', 'remove')->name('remove_vaccine');
    });
});



// ----------------- APPOINTMENTS -----------------

// livewire
Route::get('/dashboard/appointment/{id}', function ($id) {
    return view('pages.appointment.single-dash',['appointment'=>Appointment::find($id) ]);
})->middleware(['auth', 'verified'])->name('appointment.single-dash');
// ----------

Route::middleware('auth')->controller(AppointmentController::class)->group(function () {
    Route::prefix('/appointments')->group(function () {
        Route::get('/', 'index')->name('appointments');
        Route::get('/{id}', 'show');
    });

    Route::prefix('/appointment')->middleware('auth')->group(function () {
        Route::get('/', 'create');
        Route::post('/', 'store');

        Route::get('/{id}/edit', 'edit')->name('edit_appointment');
        Route::post('/{id}/update', 'update')->name('update_appointment');

        Route::get('/{id}/delete', 'delete')->name('delete_appointment');
        Route::post('/{id}/remove', 'remove')->name('remove_appointment');
    });
});


