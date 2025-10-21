@extends('layouts.base')

@section('title', 'Detalle de Producto')

@section('content')
    <a href="{{ route('productos_arm.index') }}">&larr; Volver al listado</a>

    <div style="margin-top: 20px;">
        <h2>{{ $producto->nombre }}</h2>
        <p style="font-size: 1.1em; color: #555;">{{ $producto->descripcion }}</p>

        <p class="price">Precio: {{ number_format($producto->precio, 2, ',', '.') }} €</p>
        <p><strong>Stock disponible:</strong> {{ $producto->stock }}</p>

        <hr style="margin: 25px 0;">
        <p style="font-size: 0.9em; color: #888;">Este producto forma parte del catálogo AE_ARM.</p>
    </div>
@endsection

