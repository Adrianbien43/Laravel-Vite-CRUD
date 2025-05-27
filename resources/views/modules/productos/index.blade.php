@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Productos')

@section('contenido')

    <div class="containerCrud">
        <span>
            <h1>Listado de Productos</h1>
            <a href="{{ route('home') }}" class="btn-exit">
                Salir Productos <i class="bi bi-box-arrow-right"></i>
            </a>
        </span>

        <div class="containerInside">
            <a href="{{ route('modules.productos.create') }}" class="btn-create">
                Crear nuevo producto <i class="bi bi-file-plus"></i>
            </a>

            <table class="table-page">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Observaciones</th>
                        <th>Imagenes</th>
                        <th>Precio</th>
                        <th>Botones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->observaciones }}</td>
                            <td></td>
                            <td>${{ number_format($producto->precio, 2) }}</td>
                            <td>
                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.productos.edit', $producto->id) }}" class="btn btn-edit">
                                    Editar <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.productos.destroy', $producto->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar
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
            {{ $productos->links() }}
        </div>


    </div>

@endsection
