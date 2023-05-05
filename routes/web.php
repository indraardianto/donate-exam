<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('home-page');
Route::get('/donasi', [FrontController::class, 'donasi'])->name('donasi');
Route::get('/donasi/{nama}', [FrontController::class, 'donasi_detail'])->name('donasi.detail');
Route::get('/donasi/{nama}/proses', [FrontController::class, 'donasi_proses'])->name('donasi.proses');
Route::post('/donasi/simpan', [FrontController::class, 'donasi_simpan'])->name('donasi.simpan');
// Route::get('/home', [BackController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
