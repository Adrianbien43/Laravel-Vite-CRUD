@extends('layouts.main')


@section('titulo_pagina', 'Login de usuario')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-boy">
                        <div class="card-header">

                            <h2>
                                <span class="water-title">Únete a Agüita</span>
                                <i class="bi bi-tsunami icon-grow"></i>
                            </h2>

                        </div>
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            @method('POST')
                            <label for="">Correo <i class="bi bi-envelope-at"></i> </label>
                            <input type="email" name="email" class="form-control" placeholder="Introduce tu correo">
                            <label for="">Contraseña <i class="bi bi-lock-fill"></i></label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Introduce tu contraseña">
                            <button class="btn btn-primary mt-2">Iniciar sesión <i class="bi bi-person-lock"></i></button>
                            <a href="{{ route('registro') }}" class="btn btn-info mt-2">Registrate aqui <i class="bi bi-person-video3"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
