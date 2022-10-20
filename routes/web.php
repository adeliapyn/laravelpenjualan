<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_detailController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;

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

//admin
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'create']);
Route::post('/admin/store', [AdminController::class,'store']);
Route::get('/admin/edit/{id}', [AdminController::class,'edit']);
Route::put('/admin/update/{id}', [AdminController::class,'update']);
Route::get('/admin/destroy/{id}', [AdminController::class,'destroy']);

//transaksi
Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'create']);
Route::post('/transaksi/store', [TransaksiController::class,'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update']);
Route::get('/transaksi/destroy/{id}', [TransaksiController::class,'destroy']);

//transaksi_detail
Route::get('/transaksi_detail',[Transaksi_detailController::class,'index']);
Route::get('/transaksi_detail/tambah', [Transaksi_detailController::class,'create']);
Route::post('/transaksi_detail/store', [Transaksi_detailController::class,'store']);
Route::get('/transaksi_detail/edit/{id}', [Transaksi_detailController::class,'edit']);
Route::put('/transaksi_detail/update/{id}', [Transaksi_detailController::class,'update']);
Route::get('/transaksi_detail/destroy/{id}', [Transaksi_detailController::class,'destroy']);

//suplier
Route::get('/suplier',[SuplierController::class,'index']);
Route::get('/suplier/tambah', [SuplierController::class,'create']);
Route::post('/suplier/store', [SuplierController::class,'store']);
Route::get('/suplier/edit/{id}', [SuplierController::class,'edit']);
Route::put('/suplier/update/{id}', [SuplierController::class,'update']);
Route::get('/suplier/destroy/{id}', [SuplierController::class,'destroy']);

//barang
Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'create']);
Route::post('/barang/store', [BarangController::class,'store']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus']);

//jenis
Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'create']);
Route::post('/jenis/store', [JenisController::class,'store']);
Route::get('/jenis/edit/{id}', [JenisController::class,'edit']);
Route::put('/jenis/update/{id}', [JenisController::class,'update']);
Route::get('/jenis/destroy/{id}', [JenisController::class,'destroy']);

Route::get('/transaksi_detail/detail/{id}',[Transaksi_detailController::class,'index']);