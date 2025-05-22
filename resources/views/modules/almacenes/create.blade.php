@extends('layouts.main')

@section('titulo_pagina', 'Crear un Almacén')

@section('contenido')
    <h1>Crear un nuevo Almacén</h1>

    <form action="{{ route('modules.almacenes.store') }}" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre del Almacén:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>
        </div>

        <div>
            <label for="stock_id">Stock Asociado:</label>
            <select name="stock_id" id="stock_id" required>
                @foreach($stocks as $stock)
                    <option value="{{ $stock->id }}">{{ $stock->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Guardar Almacén</button>
    </form>
@endsection
