@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Directorio de correos Egresados <a href="diregresados/create"><button type="button" class="btn btn-success float-right">Agregar correo</button></a></h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Matr&iacute;cula</th>
                <th scope="col">Email</th>
                @can('administrador')
                <th scope="col">Carrera</th>
                @endcan
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($degresados as $degresado)
                <tr>
                    <td>{{$degresado->matricula}}</td>
                    <td>{{$degresado->email}}</td>
                    @can('administrador')
                    <td>{{$degresado->carrera}}</td>
                    @endcan
                    <td>
                        <form action="{{route('diregresados.destroy',$degresado->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('diregresados.edit',$degresado->id)}}"><button type="button" class="btn btn-secondary">Editar</button></a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
