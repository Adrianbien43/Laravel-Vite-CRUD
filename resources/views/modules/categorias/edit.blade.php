@extends('layouts.main')

@section('titulo_pagina', 'Editar Categoria')

@section('contenido')
    <h1>Editar Categoria</h1>

    <form action="{{ route('modules.categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre de la Categoria:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" required>
        </div>

        <div>
            <label for="observaciones">Descripcion:</label>
            <textarea name="observaciones" id="observaciones" required>{{ $categoria->descripcion }}</textarea>
        </div>

        <button type="submit">Actualizar Categoria</button>
    </form>
@endsection
