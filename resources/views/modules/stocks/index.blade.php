@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Stocks')

@section('contenido')

    <div class="container">

        <h1>Listado de Stocks</h1>
        <a href="{{ route('modules.stocks.create') }}">Crear nuevo stock</a>

        <ul>
            @foreach ($stocks as $stock)
                <li>
                    {{ $stock->nombre }}
                    {{ $stock->descripcion }}

                    <a href="{{ route('modules.stocks.edit', $stock->id) }}">Editar</a>

                    <form action="{{ route('modules.stocks.destroy', $stock->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('¿Estás seguro de eliminar el Stock?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
