<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('permohonan', PermohonanController::class);
Route::get('/permohonan/permohonan-cetak', [PermohonanController::class, 'cetak'])->name('permohonan.cetak');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

