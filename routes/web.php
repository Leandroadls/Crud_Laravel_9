<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;


Route::get('/', [PageController::class,'home']);
Route::get('/quienes-somos', [PageController::class,'quienesSomos']);
Route::get('/contacto', [PageController::class,'contacto']);

/* CRUD PRODUCTOS */

// 7 rutas
Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos/', [ProductoController::class,'store'])->name('productos.store');
Route::get('/productos/edit/{id}', [ProductoController::class,'edit'])->name('productos.edit');
Route::put('/productos/update/{id}', [ProductoController::class,'update'])->name('productos.update');
Route::get('/productos/show/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::delete('/productos/destroy/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

