@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Egresados</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Matr&iacute;cula</th>
                <th scope="col">Nombre</th>
                @can('administrador')
                <th scope="col">Carrera</th>
                @endcan
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($egresados as $egresado)
                <tr>
                    <td>{{$egresado->matricula}}</td>
                    <td>{{$egresado->nombre}}</td>
                    @can('administrador')
                    <td>{{$egresado->carrera}}</td>
                    @endcan
                    <td>
                        <form action="">

                            <button type="button" class="btn btn-dark"><i class="fas fa-info"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
