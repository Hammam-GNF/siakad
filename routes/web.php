<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UjianController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('welcome');


Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::get('mapel/create', [MapelController::class, 'create'])->name('mapel.create');
Route::post('mapel', [MapelController::class, 'store'])->name('mapel.store');
Route::get('mapel/{id_mapel}/edit', [MapelController::class, 'edit'])->name('mapel.edit');
Route::put('mapel/{id_mapel}', [MapelController::class, 'update'])->name('mapel.update');
Route::delete('mapel/{id_mapel}', [MapelController::class, 'destroy'])->name('mapel.destroy');

Route::get('/ujian', [UjianController::class, 'index'])->name('ujian.index');
Route::get('/ujian/create', [UjianController::class, 'create'])->name('ujian.create');
Route::post('/ujian', [UjianController::class, 'store'])->name('ujian.store');
Route::get('/ujian/{id_ujian}/edit', [UjianController::class, 'edit'])->name('ujian.edit');
Route::put('/ujian/{id_ujian}', [UjianController::class, 'update'])->name('ujian.update');
Route::delete('/ujian/{id_ujian}', [UjianController::class, 'destroy'])->name('ujian.destroy');

Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta.store');
Route::get('/peserta/{id_peserta}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
Route::put('/peserta/{id_peserta}', [PesertaController::class, 'update'])->name('peserta.update');
Route::delete('/peserta/{id_peserta}', [PesertaController::class, 'destroy'])->name('peserta.destroy');