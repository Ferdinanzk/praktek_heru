<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
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

Route::get('/pengaduan {id}' ,[App\Http\Controllers\PengaduanController::class,'detailpengaduan'])->name('detail')->middleware('auth');
Route::get('/user/pengaduan', [App\Http\Controllers\PengaduanController::class, 'pengaduanUser'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/laporan ' , [App\Http\Controllers\PengaduanController::class, 'laporan'] )->name('laporan');
Route::get('/laporan/cetak ' , [App\Http\Controllers\PengaduanController::class, 'pdf'] )->name('pdf');
Route::resource('/role',RoleController::class)->middleware('auth');
Route::resource('/permiss',PermissionController::class)->middleware('auth');
Route::resource('/pengaduan',PengaduanController::class)->middleware('auth');
Route::resource('/tanggapan',TanggapanController::class)->middleware('auth');