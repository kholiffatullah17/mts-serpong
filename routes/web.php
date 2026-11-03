<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController; // <-- Wajib ditambahkan agar controller terbaca

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama (index.blade.php)
Route::get('/', function () {
    return view('index');
})->name('home');

// Halaman Pendaftaran PPDB (registrasi.blade.php)
Route::get('/register', [PpdbController::class, 'index'])->name('ppdb.register');
Route::post('/register', [PpdbController::class, 'store'])->name('ppdb.store');

// Halaman Dashboard Admin (admin_mtsserpong.blade.php)
Route::get('/admin', [PpdbController::class, 'adminDashboard'])->name('admin.dashboard');