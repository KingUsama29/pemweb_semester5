<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use Illuminate\Contracts\View\View;


Route::get('/show/{nama}', function ($nama) {
    return "hallo,".$nama;
});
Route::get('/edit/{nama}', function ($nama) {
    return "hallo,".$nama;
})->where('nama','[A-Za-z]+');

#

Route::get('/produk', [ProdukController::class,'index']);
Route::get('/produk/create', [ProdukController::class,'create']);
Route::post('/produk', [ProdukController::class,'store']);

Route::get('/produk/{id_produk}/edit',[ProdukController::class,'edit'])->name('produk.edit');
Route::put('/produk/{id_produk}',[ProdukController::class,'update'])->name('produk.update');
Route::delete('/produk/{id_produk}',[ProdukController::class, 'destroy'])->name('produk.destroy');


Route::delete('/produk', [ProdukController::class,'destroy']);
Route::get('/home', function(): void{
    echo "welcome";
});
Route::get('/index', function(): void{
    echo "welcome";
});


Route::get('/', function ():view {
    return view('welcome');
});