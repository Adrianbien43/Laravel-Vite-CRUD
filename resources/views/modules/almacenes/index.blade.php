@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Almacenes')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Listado de Almacenes</h1>
        </span>
        <div class="containerInside">
            <a href="{{ route('modules.almacenes.create') }} " class="btn-create">
                Crear nuevo almacén
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
                                <a href="{{ route('modules.almacenes.edit', $almacen->id) }}" class="btn btn-edit">Editar</a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.almacenes.destroy', $almacen->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar el Stock?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

