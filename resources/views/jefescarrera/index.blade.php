@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Jefes de Carrera <a href="jefes/create"><button type="button" class="btn btn-success float-right">Agregar Jefe</button></a></h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Carrera</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($jefes as $jefe)
            <tr>
                <td>{{$jefe->nombre}}</td>
                <td>{{$jefe->carrera}}</td>
                <td>{{$jefe->email}}</td>
                <td>
                    <form action="{{route('jefes.destroy',$jefe->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('jefes.edit',$jefe->id)}}"><button type="button" class="btn btn-secondary">Editar</button></a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
@endsection
