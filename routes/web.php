<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('/admin');
});

// Custom
Route::get('/invoices-spp/{id}/pdf', [InvoiceController::class, 'InvoiceSPP'])->name('transaksi-spp-invoice.pdf');
Route::get('/invoices-iuran/{id}/pdf', [InvoiceController::class, 'InvoiceIuran'])->name('transaksi-iuran-invoice.pdf');
Route::get('/laporan-siswa/{nis}/{id}/pdf', [InvoiceController::class, 'LaporanSiswa'])->name('laporan-siswa.pdf');
