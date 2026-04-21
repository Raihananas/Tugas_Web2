<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::resource('produk', ProdukController::class);

Route::get('/', function () {
    return view('welcome');
});
