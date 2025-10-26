<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/index', function () {
    echo 'welcome';
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/show/{nama}', function ($nama) {
    return "hallo,".$nama;
});
Route::get('/edit/{nama}', function ($nama) {
    return "hallo,".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class,'index']);


