@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Almacenes')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Listado de Almacenes</h1>
            <a href="{{ route('home') }}" class="btn-exit">
                Salir Almacenes <i class="bi bi-box-arrow-right"></i>
            </a>
        </span>
        <div class="containerInside">
            <a href="{{ route('modules.almacenes.create') }} " class="btn-create">
                Crear nuevo almacén <i class="bi bi-file-plus"></i>
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
                    @foreach ($almacenes as $almacen)
                        <tr>
                            <td>{{ $almacen->nombre }}</td>
                            <td>{{ $almacen->descripcion }}</td>
                            <td></td>
                            <td>
                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.almacenes.edit', $almacen->id) }}" class="btn btn-edit">
                                    Editar <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.almacenes.destroy', $almacen->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar el Stock?')">Eliminar
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div class="pagination">
                {{ $almacenes->links() }}
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $almacenes->links() }}
        </div>

    </div>

@endsection
