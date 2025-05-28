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
                        <form id="registerForm" action="{{ route('registrar') }}" method="post" novalidate>
                            @csrf
                            @method('POST')

                            <div class="form-group position-relative mb-3">
                                <label for="name">Nombre <i class="bi bi-person"></i></label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Introduce tu nombre">
                                <small id="nameError" class="text-danger input-error-text"></small>
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="email">Correo <i class="bi bi-envelope-at"></i></label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Introduce tu correo">
                                <small id="emailError" class="text-danger input-error-text"></small>
                            </div>

                            <div class="form-group position-relative mb-3">
                                <label for="password">Contraseña <i class="bi bi-lock-fill"></i></label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Introduce una contraseña">
                                <small id="passwordError" class="text-danger input-error-text"></small>
                            </div>

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
