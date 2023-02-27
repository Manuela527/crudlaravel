<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',[ProductosController::class,'index'])
->name('Productos.index');

Route::get('/productos/create',[ProductosController::class,'create'])
->name('Productos.create');

Route::post('/productos/create',[ProductosController::class,'store'])
->name('Productos.store');