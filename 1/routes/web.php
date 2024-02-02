<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanControllerController;


//Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/starter', [KaryawanController::class, 'index']);
Route::get('/about', [KaryawanController::class, 'about']);
Route::get('/contact', [KaryawanController::class, 'contact']);
Route::get('/admin', [KaryawanController::class, 'admin'])->name('admin');

Route::get('/', [KaryawanController::class, 'index']);
Route::get('datakaryawan', [KaryawanController::class, 'datakaryawan']);
Route::get('/formkaryawan', [KaryawanController::class, 'formkaryawan']);
Route::post('/addkaryawan', [KaryawanController::class, 'addkaryawan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
