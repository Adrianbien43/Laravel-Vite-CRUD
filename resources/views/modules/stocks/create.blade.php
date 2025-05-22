@extends('layouts.main')

@section('titulo_pagina', 'Crear un Stock')

@section('contenido')
    <h1>Crear un nuevo Stock</h1>

    <form action="{{ route('modules.stocks.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre del Stock:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>
        </div>

        <button type="submit">Guardar Stock</button>
    </form>
@endsection
