<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');

ROute::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
