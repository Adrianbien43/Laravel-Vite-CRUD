@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Stocks')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Listado de Stocks</h1>
        </span>

        <div class="containerInside">
            <a href="{{ route('modules.stocks.create') }}" class="btn-create">
                Crear nuevo stock
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
                    @foreach ($stocks as $stock)
                        <tr>
                            <td>{{ $stock->nombre }}</td>
                            <td>{{ $stock->descripcion }}</td>
                            <td></td>
                            <td>
                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.stocks.edit', $stock->id) }}" class="btn btn-edit">Editar</a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.stocks.destroy', $stock->id) }}" method="POST"
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
