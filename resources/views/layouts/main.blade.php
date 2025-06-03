<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap 5 icons CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    <!-- Vite para CSS y JS -->
    @vite([
    'resources/css/app.css',
    'resources/css/styles.css',
    'resources/js/app.js',
    'resources/js/register-validation.js',
    'resources/css/auth.css',
    'resources/css/crud.css',
    'resources/css/create.css',
    'resources/css/edit.css'
])

    <title>@yield('titulo_pagina')</title>
</head>

<body>

    <header>
        <h1 class='boder'>AGÜITA</h1>
        <h1 class='water' >AGÜITA</h1>
    </header>

    @yield('contenido')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <footer>
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
        <div class="wave"></div>
        <div class="ship">
            <div class="ship-top"></div>
            <div class="ship-top-a"></div>
            <div class="ship-top-b"></div>
        </div>
    </footer>
</body>
</html>
