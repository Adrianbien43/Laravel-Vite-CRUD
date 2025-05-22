@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Categorias')

@section('contenido')

    <div class="container">

        <h1>Listado de Categorias</h1>
        <a href="{{ route('modules.categorias.create') }}">Crea una nueva Categoria</a>

        <ul>
            @foreach ($categorias as $categoria)
                <li>
                    {{ $categoria->nombre }}
                    {{ $categoria->descripcion }}

                    <a href="{{ route('modules.categorias.edit', $categoria->id) }}">Editar</a>

                    <form action="{{ route('modules.categorias.destroy', $categoria->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('¿Estás seguro de eliminar la categoria?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
