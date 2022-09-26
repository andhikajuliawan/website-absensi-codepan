<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\KaryawanController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('absensis', AbsensiController::class);
    Route::resource('karyawans', KaryawanController::class);
    Route::resource('financials', FinancialController::class);
    Route::resource('akuns', AkunController::class);

    // DOWNLOAD QR CODE
    Route::get('downloadQR', [App\Http\Controllers\AbsensiController::class, 'downloadQR'])->name('absensis.downloadQR');

    // AUTO CHECKOUT
    Route::get('autoCheckOut', [App\Http\Controllers\AbsensiController::class, 'autoCheckOut'])->name('absensis.autoCheckOut');
});
