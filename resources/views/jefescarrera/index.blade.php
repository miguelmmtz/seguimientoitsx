@extends('layouts.app')

@section('content')
        <div class="container">
            <h2>Jefes de Carrera <a href="{{url('jefes/create')}}"><button type="button" class="btn btn-success float-right">Agregar Jefe</button></a></h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jefes as $jefe)
                    <tr>
                        <td>{{$jefe->nombre}}</td>
                        <td>{{$jefe->carrera}}</td>
                        <td>{{$jefe->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection
