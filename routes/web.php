<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_ARM_Controller;

Route::get('/', [Producto_ARM_Controller::class, 'index'])->name('productos_arm.index');
Route::get('/producto/{id}', [Producto_ARM_Controller::class, 'show'])->name('productos_arm.show');
