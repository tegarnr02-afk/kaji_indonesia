<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalalCenterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pelatihan', [PelatihanController::class, 'index'])->name('pelatihan');
Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm');
Route::get('/halal-center', [HalalCenterController::class, 'index'])->name('halal-center');
Route::get('/konsultan', [KonsultanController::class, 'index'])->name('konsultan');
Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
