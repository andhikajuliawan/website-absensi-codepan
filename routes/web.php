<?php

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

Route::get('/welcome', function(){
    return view('welcome');
} );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/register', function () {
//     return view('auth.register');
// });
Route::get('/DBabsensi', function () {
    return view('dashboard-absensi',[
        'pagetitle'=>'Absensi'

    ]);
});
Route::get('/DBakun', function () {
    return view('dashboard-akun',[
        'pagetitle'=>'Account'
    ]);
});
Route::get('/', function () {
    return view('dashboard-copy',[
        'pagetitle'=>'Dashboard'
    ]);
});
Route::get('/DBfinancial/add', function () {
    return view('dashboard-financial-add',[
        'pagetitle'=>'Add Financial'
    ]);
});
Route::get('/DBfinancial/edit', function () {
    return view('dashboard-financial-edit',[
        'pagetitle'=>'Edit Financial'
    ]);
});
Route::get('/DBfinancial/view', function () {
    return view('dashboard-financial-view',[
        'pagetitle'=>'View Financial'
    ]);
});
Route::get('/DBfinancial', function () {
    return view('dashboard-financial',[
        'pagetitle'=>'Financial'
    ]);
});
Route::get('/DBlistadd', function () {
    return view('dashboard-list-karyawan-add',[
        'pagetitle'=>'Add List Karyawan'
    ]);
});
Route::get('/DBlistedit', function () {
    return view('dashboard-list-karyawan-edit',[
        'pagetitle'=>'Edit List Karyawan'
    ]);
});
Route::get('/DBlist', function () {
    return view('dashboard-list-karyawan',[
        'pagetitle'=>'List Karyawan'
    ]);
});
