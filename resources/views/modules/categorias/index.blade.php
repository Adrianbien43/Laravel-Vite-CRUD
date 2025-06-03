@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Categorias')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Lista: Categorias</h1>
            <a href="{{ route('home') }}" class="btn-exit">
                Salir <i class="bi bi-box-arrow-right"></i>
            </a>
        </span>
        <div class="containerInside">
            <a href="{{ route('modules.categorias.create') }}" class="btn-create">
                Nueva Categoria <i class="bi bi-file-plus"></i>
            </a>

            <table class="table-page">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Botones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td>

                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.categorias.edit', $categoria->id) }}" class="btn btn-edit">
                                    Editar <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.categorias.destroy', $categoria->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar la categoria?')">Eliminar
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $categorias->links() }}
        </div>

    </div>

@endsection
