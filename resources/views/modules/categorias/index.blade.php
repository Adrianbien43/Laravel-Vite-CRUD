@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Categorias')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Listado de Categorias</h1>
        </span>
        <div class="containerInside">
            <a href="{{ route('modules.categorias.create') }}" class="btn-create">
                Crea una nueva Categoria
            </a>

            <table class="table-page">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>descripcion</th>
                        <th>Imagenes</th>
                        <th>Botones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td></td>
                            <td>
                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.categorias.edit', $categoria->id) }}" class="btn btn-edit">Editar</a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar la categoria?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
