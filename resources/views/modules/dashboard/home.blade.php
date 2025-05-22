@extends('layouts.main')

@section('titulo_pagina', 'Home de usuario')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Bienvenido a la tienda</h2>
                        <div>
                            <a href="{{ route('modules.productos.index') }}" class="btn">Productos</a>
                            <a href="{{ route('modules.categorias.index') }}" class="btn">Categorías</a>
                            <a href="{{ route('modules.stocks.index') }}" class="btn">Stocks</a>
                            <a href="{{ route('modules.almacenes.index') }}" class="btn">Almacenes</a>
                        </div>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Salir de la tienda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
