<?php

use App\Http\Controllers\AdditionalUserInfoController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EpisodeController;
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
});

Route::middleware(['auth', 'role:pacient'])->name('pacient.')->prefix('pacient')->group(function(){
    Route::get('/dashboard', [PacientController::class, 'dashboard'])->name('dashboard');
    Route::resource('appointments', AppointmentController::class)->only(['create', 'store', 'show', 'destroy']);
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
