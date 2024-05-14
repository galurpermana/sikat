<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index'); {
    Route::get('users/{id}/show', [UserController::class, 'show'])->name('users.show');
    };
});

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/daftar', function () {
    return view('kp\daftar');
});

// Route::get('/generate-pdf', [Pdfcontroller::class, 'generatePdf'])->name('generate-pdf');


Route::get('/riwayat', function () {
    return view('kp\riwayat ');
});

Route::get('/konfirmasi', function () {
    return view('kp\konfirmasi ');
});

Route::get('/berkas', function () {
    return view('kp\berkas ');
});

Route::get('/laporan', function () {
    return view('kp\laporan ');
});

Route::get('/pembimbing', function () {
    return view('kp\pembimbing');
});

Route::get('/seminar', function () {
    return view('kp\seminar');
});

Route::get('/pengesahan', function () {
    return view('kp\pengesahan');
});
