<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Halaman Pendaftaran PPDB
Route::get('/register', [PpdbController::class, 'index'])->name('ppdb.register');
Route::post('/register', [PpdbController::class, 'store'])->name('ppdb.store');

// Halaman Dashboard Admin
Route::get('/admin', [PpdbController::class, 'adminDashboard'])->name('admin.dashboard');