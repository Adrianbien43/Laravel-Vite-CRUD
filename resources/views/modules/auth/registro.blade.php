@extends('layouts.main')

@section('titulo_pagina', 'Registro de usuario')

@section('contenido')

    <section class="container">
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

                        <form action="{{ route('registrar') }}" method="post">
                            @csrf
                            @method('POST')
                            <label for="">
                                Nombre <i class="bi bi-person"></i>
                            </label>
                            <input type="text" name="name" class="form-control" placeholder="Introduce tu nombre">

                            <label for="">
                                Correo <i class="bi bi-envelope-at"></i>
                            </label>
                            <input type="email" name="email" class="form-control" placeholder="Introduce tu correo">

                            <label for="">
                                Contraseña <i class="bi bi-lock-fill"></i>
                            </label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Introduce una contraseña">

                            <button class="btn btn-primary mt-2">
                                Registrarse <i class="bi bi-person-add"></i>
                            </button>

                            <a href="{{ route('login') }}" class="btn btn-info mt-2">
                                Logearse <i class="bi bi-person-video3"></i>
                            </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
