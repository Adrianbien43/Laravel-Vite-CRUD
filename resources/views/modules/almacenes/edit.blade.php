@extends('layouts.main')

@section('titulo_pagina', 'Editar Almacén')

@section('contenido')
    <h1>Editar un Almacén</h1>

    <form action="{{ route('modules.almacenes.update', $almacen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre del Almacén:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $almacen->nombre }}" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required>{{ $almacen->descripcion }}</textarea>
        </div>

        <div>
            <label for="stock_id">Stock Asociado:</label>
            <select name="stock_id" id="stock_id" required>
                @foreach($stocks as $stock)
                    <option value="{{ $stock->id }}" {{ $almacen->stock_id == $stock->id ? 'selected' : '' }}>
                        {{ $stock->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Actualizar Almacén</button>
    </form>
@endsection
