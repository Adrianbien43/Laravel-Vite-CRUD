@extends('layouts.main')


@section('titulo_pagina', 'Login de usuario')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-boy">
                        <h2>Login de usuario con laravel 11</h2>
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            @method('POST')
                            <label for="">Correo</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="Introduce tu correo">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Introduce tu contraseña">
                            <button class="btn btn-primary mt-2">Iniciar sesión</button>
                            <a href="{{ route('registro') }}" class="btn btn-info mt-2">Registrate aqui</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
