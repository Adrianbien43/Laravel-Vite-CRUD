@extends('layouts.main')

@section('titulo_pagina', 'Crear Categoría')

@section('contenido')
    <div class="Create-container">
        <h1>Crear Nueva Categoria</h1>

        <div class="form-create-continer">
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

                <button class="button-create" type="submit">Guardar Categoria</button>
            </form>
        </div>
    </div>
@endsection
