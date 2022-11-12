<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', function () {
    return view('Resume');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/krs', function () {
    return view('krs');
});

Route::get('/khs', function () {
    return view('khs');
});

Route::get('/admin', function () { 
    return view('admin'); 
});

Route::get('/laporan/mahasiswa',[LaporanController::class,'index']);
Route::get('/laporan/mahasiswa/pdf',[LaporanController::class,'cetak_pdf']);
Route::resource('admin/dosen', 'App\Http\Controllers\Admin\DosenController');
Route::resource('mahasiswa', 'App\\mahasiswaController');
Route::resource('admin/dosen', 'App\Http\Controllers\Admin\DosenController');
Route::resource('admin/mahasiswa', 'App\Http\Controllers\Admin\mahasiswaController');