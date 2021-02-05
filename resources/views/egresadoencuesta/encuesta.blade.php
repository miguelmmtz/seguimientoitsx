<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h3 class="navbar-brand" >{{ config('app.name', 'Laravel') }}</h3>
            </div>
        </nav>
    </div>

    <main class="py-4">
        <div class="container">
            <form action="" method="POST">
                <!-- Seccion 1 -->
                @include('egresadoencuesta.seccion1')

                <!-- Seccion 2 -->
                @include('egresadoencuesta.seccion2')

                <!-- Seccion 3 -->
                @include('egresadoencuesta.seccion3')

                <!-- Seccion 4 -->
                @include('egresadoencuesta.seccion4')

                <!-- Seccion 5 -->
                @include('egresadoencuesta.seccion5')

                <!-- Seccion 6 -->
                @include('egresadoencuesta.seccion6')

                <!-- Seccion  -->
                @include('egresadoencuesta.seccion7')

                <button type="button" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </main>
</body>
</html>
