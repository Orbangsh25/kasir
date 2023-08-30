<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

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
Route::get('/dasboard', [DasboardController::class,'index']);


Route::get('kasir/barang', [BarangController::class,'index']);
Route::get('kasir/barang/tambah', [BarangController::class,'create']);
Route::post('kasir/barang/store', [BarangController::class,'store']);
Route::get('kasir/barang/edit/{id}', [BarangController::class,'edit']);
Route::put('kasir/barang/update/{id}', [BarangController::class,'update']);
Route::get('kasir/barang/destroy/{id}', [BarangController::class,'destroy']);

Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'create']);
Route::post('/transaksi/store', [TransaksiController::class,'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update']);
Route::get('/transaksi/destroy/{id}', [TransaksiController::class,'destroy']);
