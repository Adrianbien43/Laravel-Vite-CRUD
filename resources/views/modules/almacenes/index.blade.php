@extends('layouts.main')

@section('titulo_pagina', 'CRUD de Almacenes')

@section('contenido')

    <div class="container">

        <h1>Listado de Almacenes</h1>
        <a href="{{ route('modules.almacenes.create') }}">Crear nuevo almacén</a>

        <ul>
            @foreach ($almacenes as $almacen)
                <li>
                    {{ $almacen->nombre }}
                    {{ $almacen->descripcion }}

                    <a href="{{ route('modules.almacenes.edit', $almacen->id) }}">Editar</a>

                    <form action="{{ route('modules.almacenes.destroy', $almacen->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('¿Estás seguro de eliminar el Almacén?')">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
