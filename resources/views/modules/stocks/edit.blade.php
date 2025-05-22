@extends('layouts.main')

@section('titulo_pagina', 'Editar Stock')

@section('contenido')
    <h1>Editar un Stock</h1>

    <form action="{{ route('modules.stocks.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre del Stock:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $stock->nombre }}" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" required>{{ $stock->descripcion }}</textarea>
        </div>

        <button type="submit">Actualizar Stock</button>
    </form>
@endsection
