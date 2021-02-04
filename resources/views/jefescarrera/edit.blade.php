@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <h2>Editar Jefe de Carrera</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('jefes.update',$jefe->id)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$jefe->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected>{{$jefe->carrera}}</option>
                            <option value="ING. SISTEMAS COMPUTACIONALES">ING. SISTEMAS COMPUTACIONALES</option>
                            <option value="ING. INDUSTRIAL">ING. INDUSTRIAL</option>
                            <option value="ING. BIOQUIMICIA">ING. BIOQUIMICIA</option>
                            <option value="ING. ELECTROMECANICA">ING. ELECTROMECANICA</option>
                            <option value="ING. ELECTRONICA">ING. ELECTRONICA</option>
                            <option value="ING. INDUSTRIAS ALIMENTARIAS">ING. INDUSTRIAS ALIMENTARIAS</option>
                            <option value="LIC. GASTRONOMIA">LIC. GASTRONOMIA</option>
                            <option value="ING. CIVIL">ING. CIVIL</option>
                            <option value="ING. MECATRONICA">ING. MECATRONICA</option>
                            <option value="ING. GESTION EMPRESARIAL">ING. GESTION EMPRESARIAL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$jefe->email}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
