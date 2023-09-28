<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashAdController;
use App\Http\Controllers\DashGuController;

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



Route::resource('agenda', AgendaController::class);

Route::resource('guru', GuruController::class);
Route::get('/search', [GuruController::class, 'search'])->name('search');

Route::resource('kegiatan', KegiatanController::class);

Route::controller(UsersController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUser:1']], function(){
        Route::resource('Dashboard_Admin', DashAdController::class);
    });
    Route::group(['middleware' => ['cekUser:2']], function(){
        Route::resource('Dashboard_Guru', DashGuController::class);
    });
});