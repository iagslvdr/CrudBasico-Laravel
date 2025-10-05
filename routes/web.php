<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/produtos', 'App\Http\Controllers\ProdutoController');
Route::resource('/clientes', 'App\Http\Controllers\ClienteController');