<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('barang/pdf', [BarangController::class, 'cetakPdf'])->name('barang.pdf');
Route::get('penjualan/pdf', [PenjualanController::class, 'cetakPdf'])->name('penjualan.pdf');

Route::resource('barang', BarangController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('penjualan', PenjualanController::class);



