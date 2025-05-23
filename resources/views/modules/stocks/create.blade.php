@extends('layouts.main')

@section('titulo_pagina', 'Crear un Stock')

@section('contenido')
    <div class="Create-container">
        <h1>Crear un nuevo Stock</h1>
        <div class="form-create-continer">
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

                <button class="button-create" type="submit">Guardar Stock</button>
            </form>
        </div>
    </div>
@endsection
