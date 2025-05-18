<?php

use App\Http\Controllers\AdditionalUserInfoController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:nurse'])->name('nurse.')->prefix('nurse')->group(function () {
    Route::get('/dashboard', [NurseController::class, 'dashboard'])->name('dashboard');
    Route::resource('appointments', AppointmentController::class)->except(['index', 'show']);
    Route::resource('episodes', EpisodeController::class)->only(['create', 'store']);
    Route::resource('diseases', DiseaseController::class)->only(['index', 'show']);
    Route::get('search-disease', [DiseaseController::class, 'searchDisease'])->name('search-disease');
    Route::resource('medicines', MedicineController::class)->only(['index', 'show']);
    Route::get('search-medicine', [MedicineController::class, 'searchMedicine'])->name('search-medicine');
    Route::resource('vaccines', VaccineController::class)->only(['index', 'show']);
    Route::get('search-vaccine', [VaccineController::class, 'searchVaccine'])->name('search-vaccine');
    Route::resource('allergies', AllergyController::class)->only(['index', 'show']);
    Route::get('search-allergy', [AllergyController::class, 'searchAllergy'])->name('search-allergy');
    Route::get('/pacients/{id}/medical-record', [NurseController::class, 'showMedicalRecord'])->name('pacients.medical_record');
    Route::get('/pacients/{id}/medical-history', [NurseController::class, 'showMedicalHistory'])->name('pacients.medical_history');
    Route::get('/episode/{episode_id}/appointments', [NurseController::class, 'showEpisodeAppointments'])->name('episode.appointments');
});

Route::middleware(['auth', 'role:pacient'])->name('pacient.')->prefix('pacient')->group(function(){
    Route::get('/dashboard', [PacientController::class, 'dashboard'])->name('dashboard');
    Route::resource('appointments', AppointmentController::class)->only(['create', 'store', 'show', 'destroy']);
    Route::get('/medical-record', [PacientController::class, 'medicalRecord'])->name('medical_record');
    Route::get('/medical-history', [PacientController::class, 'medicalHistory'])->name('medical_history');
    Route::get('/episode/{episode_id}/appointments', [PacientController::class, 'showEpisodeAppointments'])->name('episode.appointments');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/info/edit', [AdditionalUserInfoController::class, 'edit'])->name('user.info.edit');
    Route::put('/user/info/update', [AdditionalUserInfoController::class, 'update'])->name('user.info.update');
});

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


require __DIR__ . '/auth.php';
