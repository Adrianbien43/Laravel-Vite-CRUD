@extends('layouts.main')

@section('titulo_pagina', 'Editar Categoria')

@section('contenido')
    <div class="container-edit">
        <div class="from-container-edit">
            <span>
                <h1>Editar Categoria</h1>
            </span>

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

                <button class="edit-button" type="submit">Actualizar Categoria</button>
            </form>
        </div>
    </div>
@endsection
