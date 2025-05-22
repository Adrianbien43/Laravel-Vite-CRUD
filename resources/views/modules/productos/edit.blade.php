@extends('layouts.main')

@section('titulo_pagina', 'Editar Producto')

@section('contenido')
    <h1>Editar Producto</h1>

    <form action="{{ route('modules.productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div>
            <label for="observaciones">Observaciones:</label>
            <textarea name="observaciones" id="observaciones" required>{{ $producto->observaciones }}</textarea>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" name="precio" id="precio" value="{{ $producto->precio }}" required>
        </div>

        <div>
            <label for="categorias">Categorías:</label>
            <select name="categorias[]" id="categorias" multiple required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ in_array($categoria->id, $producto->categorias->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="almacenes">Almacenes:</label>
            <select name="almacenes[]" id="almacenes" multiple required>
                @foreach($almacenes as $almacen)
                    <option value="{{ $almacen->id }}" {{ in_array($almacen->id, $producto->almacenes->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $almacen->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Actualizar Producto</button>
    </form>
@endsection
