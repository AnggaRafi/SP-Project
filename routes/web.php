<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login',  [AuthController::class,'showLogin'])->name('show.login');
Route::post('/login',  [AuthController::class,'Login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.siswa');
    })->name('show.siswa');

    Route::get('/test', function () {
        return view('pages.riwayat');
    });

    Route::get('/tabel1', function () {
        return view('pages.tabelBelumLunas');
    })->name('tabelbelumlunas');

    Route::get('/edit-siswa', function () {
        return view('pages.editSiswa');
    })->name('edit.siswa');

    Route::post('/edit-siswa', [EditController::class, 'edit'])->name('editSiswa');

});

Route::middleware('is_admin:admin')->group(function () {

    Route::get('/deletedSiswa', function () {
        return view('pages.deletedSiswa');
    })->name('show.deletedSiswa');

});
