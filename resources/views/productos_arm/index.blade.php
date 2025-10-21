@extends('layouts.base')

@section('title', 'Listado de Productos')

@section('content')
    <h2>Productos Disponibles</h2>

    @if($productos->isEmpty())
        <p>No hay productos registrados todavía.</p>
    @else
        <div class="grid">
            @foreach($productos as $p)
                <div class="card">
                    <h3>{{ $p->nombre }}</h3>
                    <p>{{ $p->descripcion }}</p>
                    <p class="price">{{ number_format($p->precio, 2, ',', '.') }} €</p>
                    <a class="btn" href="{{ route('productos_arm.show', $p->id) }}">Ver detalles</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection

