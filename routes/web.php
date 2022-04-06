<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesertaController;
use Illuminate\Routing\Router;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('peserta')->group(function () {
    Route::get('/', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/create', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('/store', [PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/edit/{id}', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::patch('/{id}', [PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('/{id}', [PesertaController::class, 'destroy'])->name('peserta.delete');
    Route::get('/{id}', [PesertaController::class, 'cetak'])->name('peserta.cetak');
});