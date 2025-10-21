<?php

namespace App\Http\Controllers;

use App\Models\Producto_ARM;

class Producto_ARM_Controller extends Controller
{
    // Listado
    public function index()
    {
        $productos = Producto_ARM::all();
        return view('productos_arm.index', compact('productos'));
    }

    // Detalle
    public function show($id)
    {
        $producto = Producto_ARM::findOrFail($id);
        return view('productos_arm.show', compact('producto'));
    }
}

