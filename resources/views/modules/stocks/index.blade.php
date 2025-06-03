@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Stocks')

@section('contenido')

    <div class="containerCrud">

        <span>
            <h1>Listado de Stocks</h1>
            <a href="{{ route('home') }}" class="btn-exit">
                Salir Stocks <i class="bi bi-box-arrow-right"></i>
            </a>
        </span>

        <div class="containerInside">
            <a href="{{ route('modules.stocks.create') }}" class="btn-create">
                Crear nuevo stock <i class="bi bi-file-plus"></i>
            </a>

            <table class="table-page">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>descripcion</th>
                        <th>Botones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stocks as $stock)
                        <tr>
                            <td>{{ $stock->nombre }}</td>
                            <td>{{ $stock->descripcion }}</td>
                            <td>
                                <!-- Botón de Editar -->
                                <a href="{{ route('modules.stocks.edit', $stock->id) }}" class="btn btn-edit">
                                    Editar <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Formulario de Eliminar -->
                                <form action="{{ route('modules.stocks.destroy', $stock->id) }}" method="POST"
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
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $stocks->links() }}
        </div>

    </div>

@endsection
