<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\KaryawanController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('absensis', AbsensiController::class);
    Route::resource('karyawans', KaryawanController::class);
    Route::resource('financials', FinancialController::class);
    Route::get('/DBakun', function () {
        return view('dashboard-akun', [
            'pagetitle' => 'Account'
        ]);
    });
});



// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

// Route::get('/DBabsensi', function () {
//     return view('dashboard-absensi', [
//         'pagetitle' => 'Absensi'

//     ]);
// });
// Route::get('/DBakun', function () {
//     return view('dashboard-akun', [
//         'pagetitle' => 'Account'
//     ]);
// });
// Route::get('/', function () {
//     return view('welcome', [
//         'pagetitle' => 'Dashboard'
//     ]);
// });
// Route::get('/DBfinancial/add', function () {
//     return view('dashboard-financial-add', [
//         'pagetitle' => 'Add Financial'
//     ]);
// });
// Route::get('/DBfinancial/edit', function () {
//     return view('dashboard-financial-edit', [
//         'pagetitle' => 'Edit Financial'
//     ]);
// });
// Route::get('/DBfinancial/view', function () {
//     return view('dashboard-financial-view', [
//         'pagetitle' => 'View Financial'
//     ]);
// });
// Route::get('/DBfinancial', function () {
//     return view('dashboard-financial', [
//         'pagetitle' => 'Financial'
//     ]);
// });
// Route::get('/DBlistadd', function () {
//     return view('list-karyawan.add', [
//         'pagetitle' => 'Add List Karyawan123'
//     ]);
// });
// Route::get('/DBlistedit', function () {
//     return view('dashboard-list-karyawan-edit', [
//         'pagetitle' => 'Edit List Karyawan'
//     ]);
// });
// Route::get('/DBlist', function () {
//     return view('dashboard-list-karyawan', [
//         'pagetitle' => 'List Karyawan'
//     ]);
// });
