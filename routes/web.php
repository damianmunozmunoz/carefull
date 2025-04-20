<?php

use App\Http\Controllers\NurseController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:pacient'])->group(function (){
    Route::get('/pacient/dashboard', [PacientController::class, 'dashboard'])->name('pacient.dashboard');
});

Route::middleware(['auth', 'role:nurse'])->group(function(){
    Route::get('/nurse/dashboard', [NurseController::class, 'dashboard'])->name('nurse.dashboard');
});

require __DIR__.'/auth.php';
