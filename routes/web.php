<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('index');
    Route::get('/create', [PengaduanController::class, 'create'])->name('create');
    Route::post('/store', [PengaduanController::class, 'store'])->name('store');
    Route::get('/{pengaduan}', [PengaduanController::class, 'show'])->name('show');
    Route::get('/{pengaduan}/edit', [PengaduanController::class, 'edit'])->name('edit');
    Route::put('/{pengaduan}', [PengaduanController::class, 'update'])->name('update');
    Route::delete('/{pengaduan}', [PengaduanController::class, 'destroy'])->name('destroy');
});

Route::prefix('galeri')->name('galeri.')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('index');
    Route::get('/{id}', [GaleriController::class, 'show'])->name('show');
});

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/', [LayananController::class, 'index'])->name('index');
    Route::get('/kartu-shinobi', [LayananController::class, 'kartuShinobiIndex'])->name('kartu_shinobi.index');
    Route::get('/kartu-shinobi/create', [LayananController::class, 'kartuShinobiCreate'])->name('kartu_shinobi.create');
    Route::post('/kartu-shinobi', [LayananController::class, 'kartuShinobiStore'])->name('kartu_shinobi.store');
    Route::get('/kk', [LayananController::class, 'kkIndex'])->name('kk.index');
    Route::get('/kk/create', [LayananController::class, 'kkCreate'])->name('kk.create');
    Route::post('/kk', [LayananController::class, 'kkStore'])->name('kk.store');
});
