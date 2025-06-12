<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KaryawanDBController;


// Halaman utama
Route::get('/', function () {
    return view('frontend');
});

// Route halo
Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Dosen routes
Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

// View routes
Route::get('blog', function () {
    return view('blog');
});
Route::get('linktree', function () {
    return view('linktree');
});
Route::get('ETS', function () {
    return view('ETS');
});
Route::get('latihancalculator', function () {
    return view('latihancalculator');
});
Route::get('pertemuan4', function () {
    return view('pertemuan4');
});
Route::get('validasi1', function () {
    return view('validasi1');
});

// Pegawai routes
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// BlogController routes
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//route karywan
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/tambah/karyawan', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);
