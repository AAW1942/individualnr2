<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProdusController;

Route::get('/', [MainController::class, 'index'])->name('produse');
Route::resource('admin', ProdusController::class);