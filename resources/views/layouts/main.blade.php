<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    @vite([
        'resources/css/app.css',
        'resources/css/styles.css',
        'resources/js/app.js',
        'resources/css/auth.css',
        'resources/css/crud.css'
    ]) <!-- Vite para CSS y JS -->

    <title>@yield('titulo_pagina')</title>
</head>

<body>

    <header>
        <h1>Adri-TACK</h1>
    </header>

    @yield('contenido')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <footer>
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
