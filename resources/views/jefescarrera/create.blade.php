@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <form action="/jefes" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <select name="carrera" class="form-select">
                        <option selected>Seleccione la carrera</option>
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
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contrase&ntilde;a</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</div>
@endsection
