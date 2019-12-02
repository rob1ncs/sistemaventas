@extends('layouts.app')


@section('content')
<div class="container">
        <form action="{{ url('/proveedores')}}" method="post" >
        {{ csrf_field() }}
            <div class="form-group row">
                <h3>Crear proveedor</h3>
            </div>
            <hr>
            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" class="col-sm-1 col-form-label">{{ 'telefono' }}</label>
                <div class="col-sm-3">
                    <input type="number" name="telefono" class="form-control" id="telefono" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="direccion" class="col-sm-1 col-form-label">{{ 'direccion' }}</label>
                <div class="col-sm-3">
                    <input type="text" name="direccion" class="form-control" id="direccion" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <hr>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="submit" value="Agregar" class="btn btn-succes">
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-danger" href="{{ url('proveedores') }}">Regresar</a>
                </div>
            </div>
        </form>
</div>


@endsection