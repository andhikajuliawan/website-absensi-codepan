<?php

use App\Http\Controllers\API\AbsensiController;
use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FormController;
use App\Http\Controllers\API\TaskController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function () {

    // AUTHENTICATION

    Route::get('/logout', [AuthController::class, 'logout']);

    // TASK
    Route::get('/task/index', [TaskController::class, 'index']);
    Route::post('/task/create/{id}', [TaskController::class, 'create']);
    Route::put('/task/update/{id}', [TaskController::class, 'update']);
    Route::delete('/task/delete/{id}', [TaskController::class, 'destroy']);
    Route::get('/task/edit/{id}', [TaskController::class, 'edit']);

    // ABSENSI
    Route::get('/absensi/index', [AbsensiController::class, 'index']);
    Route::post('/absensi/create/{id}', [AbsensiController::class, 'create']);
    Route::put('/absensi/update/{id}', [AbsensiController::class, 'update']);
    Route::get('/absensi/edit/{id}', [AbsensiController::class, 'edit']);

    // ACCOUNT
    Route::get('/account/index/{id}', [AccountController::class, 'index']);
    Route::put('/account/update/{id}', [AccountController::class, 'update']);
});

Route::post('/login', [AuthController::class, 'login']);
