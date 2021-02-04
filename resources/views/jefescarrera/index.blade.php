@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Jefes de Carrera</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($jefes as $jefe)
            <tr>
                <td>{{$jefe->name}}</td>
                <td>{{$jefe->email}}</td>
                <td>
                    <a href="{{route('jefes.edit',$jefe->id)}}"><button type="button" class="btn btn-secondary">Editar</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
