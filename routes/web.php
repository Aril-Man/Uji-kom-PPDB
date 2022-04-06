<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesertaController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');

Auth::routes();
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('peserta')->group(function () {
    Route::get('/', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/create', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('/store', [PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/{id}', [PesertaController::class, 'cetak'])->name('peserta.cetak');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/{id}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::patch('/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    });
});