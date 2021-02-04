@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <h2>A&ntilde;adir correo de Egresado</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/diregresados" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="matricula" class="form-label">Matr&iacute;cula</label>
                    <input type="text" class="form-control" name="matricula">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                @can('administrador')
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <select name="carrera" class="form-select">
                        <option selected>Seleccione la carrera</option>
                        <option value="ING. SISTEMAS COMPUTACIONALES">ING. SISTEMAS COMPUTACIONALES</option>
                        <option value="ING. INDUSTRIAL">ING. INDUSTRIAL</option>
                        <option value="ING. BIOQUIMICA">ING. BIOQUIMICA</option>
                        <option value="ING. ELECTROMECANICA">ING. ELECTROMECANICA</option>
                        <option value="ING. ELECTRONICA">ING. ELECTRONICA</option>
                        <option value="ING. INDUSTRIAS ALIMENTARIAS">ING. INDUSTRIAS ALIMENTARIAS</option>
                        <option value="LIC. GASTRONOMIA">LIC. GASTRONOMIA</option>
                        <option value="ING. CIVIL">ING. CIVIL</option>
                        <option value="ING. MECATRONICA">ING. MECATRONICA</option>
                        <option value="ING. GESTION EMPRESARIAL">ING. GESTION EMPRESARIAL</option>
                    </select>
                </div>
                @endcan
                @can('jefe-sistemas')
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <select name="carrera" class="form-select">
                        <option selected value="ING. SISTEMAS COMPUTACIONALES">ING. SISTEMAS COMPUTACIONALES</option>
                    </select>
                </div>
                @endcan
                @can('jefe-industrial')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. INDUSTRIAL">ING. INDUSTRIAL</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-bioquimica')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. BIOQUIMICA">ING. BIOQUIMICA</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-electromecanica')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. ELECTROMECANICA">ING. ELECTROMECANICA</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-electronica')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. ELECTRONICA">ING. ELECTRONICA</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-alimentarias')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. INDUSTRIAS ALIMENTARIAS">ING. INDUSTRIAS ALIMENTARIAS</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-gastronomia')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. GASTRONOMIA">ING. GASTRONOMIA</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-civil')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. CIVIL">ING. CIVIL</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-mecatronica')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. MECATRONICA">ING. MECATRONICA</option>
                        </select>
                    </div>
                @endcan
                @can('jefe-gestion')
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <select name="carrera" class="form-select">
                            <option selected value="ING. GESTION EMPRESARIAL">ING. GESTION EMPRESARIAL</option>
                        </select>
                    </div>
                @endcan
                <button type="submit" class="btn btn-primary">A&ntilde;adir</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection
