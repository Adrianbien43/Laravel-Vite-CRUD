@extends('layouts.main')

@section('titulo_pagina', 'Crear Categoría')

@section('contenido')
    <h1>Crear Nueva Categoria</h1>

    <form action="{{ route('modules.categorias.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre de la Categoria:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>
        </div>

        <button type="submit">Guardar Categoria</button>
    </form>
@endsection
