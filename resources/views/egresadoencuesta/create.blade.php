@extends('egresadoencuesta.index')

@section('content')

    <main class="py-4">
        <div class="container">
            <form action="/egresado-encuesta" method="POST">
                @csrf
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

                <button type="submit" class="btn btn-primary">Finalizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </main>

@endsection

