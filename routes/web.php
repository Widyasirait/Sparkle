<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\BarisParkirController;
use App\Http\Middleware\EnsureTokenIsValid;

// Route untuk autentikasi
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
Route::post('/registrasi-proses', [RegistrasiController::class, 'registrasi_proses'])->name('registrasi.proses');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/zona1', [ZoneController::class, 'zona1'])->name('zona.zona1');
    Route::get('/zona2', [ZoneController::class, 'zona2'])->name('zona.zona2');
    Route::get('/zona3', [ZoneController::class, 'zona3'])->name('zona.zona3');
    Route::get('/zona4', [ZoneController::class, 'zona4'])->name('zona.zona4');
    Route::get('/zona5', [ZoneController::class, 'zona5'])->name('zona.zona5');
    Route::get('/zona6', [ZoneController::class, 'zona6'])->name('zona.zona6');

    Route::get('/zona{id}', [ZoneController::class, 'show'])->name('zona.show');
    Route::get('/get-slot-parkir', [ZoneController::class, 'getSlotParkir'])->name('get.slot.parkir');
});
