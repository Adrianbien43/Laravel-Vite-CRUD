@extends('layouts.main')

@section('titulo_pagina', 'Editar Stock')

@section('contenido')
    <div class="container-edit">
        <div class="from-container-edit">
            <span>
                <h1>Editar un Stock</h1>
            </span>
            <form action="{{ route('modules.stocks.update', $stock->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="nombre">Nombre del Stock:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $stock->nombre }}" required>
                </div>

                <div>
                    <label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion" id="descripcion" required>{{ $stock->descripcion }}</textarea>
                </div>

                <button class="edit-button" type="submit">Actualizar Stock</button>
            </form>
        </div>
    </div>
@endsection
