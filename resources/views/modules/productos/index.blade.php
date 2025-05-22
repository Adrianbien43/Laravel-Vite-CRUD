@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Productos')

@section('contenido')

    <div class="container">

        <h1>Listado de Productos</h1>
        <a href="{{ route('modules.productos.create') }}">Crear nuevo producto</a>

        <ul>
            @foreach ($productos as $producto)
                <li>
                    {{ $producto->nombre }}
                    {{ $producto->observaciones }}
                    {{ $producto->precio }}

                    <a href="{{ route('modules.productos.edit', $producto->id) }}">Editar</a>

                    <form action="{{ route('modules.productos.destroy', $producto->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
