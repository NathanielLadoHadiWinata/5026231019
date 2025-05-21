<?php

use Illuminate\Support\Facades\Route;
// import java.io ;

// System.out.println
Route::get('/', function () {
    return view('frontend');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

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

});Route::get('pertemuan4', function () {
	return view('pertemuan4');

});

Route::get('validasi1', function () {
	return view('validasi1');
});
