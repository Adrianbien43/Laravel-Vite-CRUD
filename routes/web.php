<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\AlmacenController;


Route::middleware("guest")->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/registro', [AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar', [AuthController::class, 'registar'])->name('registrar');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});


Route::middleware("auth")->group(function () {
    Route::get('/home', action: [AuthController::class, 'home'])->name('home');
    Route::get('/logout', action: [AuthController::class, 'logout'])->name('logout');
    Route::resource('productos', ProductoController::class)->names('modules.productos');
    Route::resource('categorias', controller: CategoriaController::class)->names('modules.categorias');
    Route::resource('stocks', controller: StocksController::class)->names('modules.stocks');
    Route::resource('almacenes', AlmacenController::class)->names('modules.almacenes');
});
