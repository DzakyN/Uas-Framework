<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengguna', PenggunaController::class);
Route::resource('barang', BarangController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('penjualan', PenjualanController::class);

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('laporan/pembelian', [LaporanController::class, 'laporanPembelian'])->name('laporan.pembelian');
Route::get('laporan/penjualan', [LaporanController::class, 'laporanPenjualan'])->name('laporan.penjualan');
