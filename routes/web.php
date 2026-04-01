<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalalCenterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [HomeController::class , 'index'])->name('home');

// Auth
Route::get('/login', [AuthController::class , 'login'])->name('login');
Route::get('/register', [AuthController::class , 'register'])->name('register');

// Pelatihan
Route::prefix('pelatihan')->group(function () {
  Route::get('/', [PelatihanController::class , 'index'])->name('pelatihan');
  Route::get('/program', [PelatihanController::class , 'program'])->name('pelatihan.program');
  Route::get('/event', [PelatihanController::class , 'event'])->name('pelatihan.event');
  Route::get('/pembimbing', [PelatihanController::class , 'pembimbing'])->name('pelatihan.pembimbing');
});

// UMKM
Route::prefix('umkm')->group(function () {
  Route::get('/', [UmkmController::class , 'index'])->name('umkm');
  Route::get('/produk', [UmkmController::class , 'produk'])->name('umkm.produk');
  Route::get('/pembimbing', [UmkmController::class , 'pembimbing'])->name('umkm.pembimbing');
  Route::get('/lokasi', [UmkmController::class , 'lokasi'])->name('umkm.lokasi');
});

// Halal Center
Route::prefix('halal-center')->group(function () {
  Route::get('/', [HalalCenterController::class , 'index'])->name('halal-center');
  Route::get('/gratis', [HalalCenterController::class , 'gratis'])->name('halal-center.gratis');
  Route::get('/berbayar', [HalalCenterController::class , 'berbayar'])->name('halal-center.berbayar');
});

// Konsultan
Route::prefix('konsultan')->group(function () {
  Route::get('/', [KonsultanController::class , 'index'])->name('konsultan');
  Route::get('/layanan', [KonsultanController::class , 'layanan'])->name('konsultan.layanan');
  Route::get('/paket', [KonsultanController::class , 'paket'])->name('konsultan.paket');
});

// Media
Route::get('/media', [MediaController::class , 'index'])->name('media');