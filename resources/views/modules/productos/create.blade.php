@extends('layouts.main')

@section('titulo_pagina', 'Crear Producto')

@section('contenido')
    <div class="Create-container">
        <h1>Crear Nuevo Producto</h1>
        <div class="form-create-continer">
            <form action="{{ route('modules.productos.store') }}" method="POST">
                @csrf
                <div>
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <div>
                    <label for="observaciones">Observaciones:</label>
                    <textarea name="observaciones" id="observaciones" required></textarea>
                </div>

                <div>
                    <label for="precio">Precio:</label>
                    <input type="number" step="0.01" name="precio" id="precio" required>
                </div>

                <div>
                    <label for="categorias">Categorías:</label>
                    <select name="categorias[]" id="categorias" multiple required>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="almacenes">Almacenes:</label>
                    <select name="almacenes[]" id="almacenes" multiple required>
                        @foreach($almacenes as $almacen)
                            <option value="{{ $almacen->id }}">{{ $almacen->nombre }}</option>
                        @endforeach
                    </select>
                </div>


                <button class="button-create" type="submit">Guardar Producto</button>
            </form>
        </div>
    </div>
@endsection
