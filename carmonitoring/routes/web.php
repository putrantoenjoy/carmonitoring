<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemesananKendaraanController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/home/kendaraan', KendaraanController::class);
Route::resource('/home/pemesanan', PemesananKendaraanController::class);
Route::patch('/home/pemesanan/status/{id}/', [PemesananKendaraanController::class, 'setuju'])->name('pemesanan.setuju');
Route::patch('/home/pemesanan/tolak/{id}/', [PemesananKendaraanController::class, 'tolak'])->name('pemesanan.tolak');
