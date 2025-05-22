@extends('layouts.main')

@section('titulo_pagina', 'Registro de usuario')

@section('contenido')

    <section class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-boy">
                        <h2>Registro de usuario con laravel 11</h2>
                        <form action="{{ route('registrar') }}" method="post">
                            @csrf
                            @method('POST')
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Introduce tu nombre">
                            <label for="">Correo</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="Introduce tu correo">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Introduce tu contraseña">
                            <button class="btn btn-primary mt-2">Registrarse</button>
                            <a href="{{ route('login') }}" class="btn btn-info mt-2">Logearse</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
