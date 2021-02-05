@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Directorio de correos Empresas </h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Raz&oacute;n Social</th>
                <th scope="col">Nombre Empleador(a)</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($dempresas as $dempresa)
                <tr>
                    <td>{{$dempresa->nombreEmpresa}}</td>
                    <td>{{$dempresa->nombreJefe}}</td>
                    <td>{{$dempresa->email}}</td>
                    <td>
                        <form action="">

                            <!-- La ruta direcciona al cuestionario de egresados -->
                            <a href="/egresado-encuesta"><button type="button" class="btn btn-dark">Encuesta</button></a>
                            <button type="button" class="btn btn-primary"><i class="far fa-envelope"></i></button>
                            <button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
