@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Productos')

@section('contenido')

    <div class="containerCrud">
        <span>
            <h1>Listado de Productos</h1>
        </span>

        <div class="containerInside">
            <a href="{{ route('modules.productos.create') }}" class="btn-create">
                Crear nuevo producto
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
                                <a href="{{ route('modules.productos.edit', $producto->id) }}" class="btn btn-edit">Editar</a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.productos.destroy', $producto->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

