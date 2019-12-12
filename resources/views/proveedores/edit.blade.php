@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ url('/proveedores/'.$proveedor->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group row">
                <h3>Editar Proveedor</h3>
            </div>
            <hr>
            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $proveedor->nombre }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" class="col-sm-1 col-form-label">{{ 'Telefono' }}</label>
                <div class="col-sm-3">
                    <input type="number" name="telefono" class="form-control" id="telefono" value="{{ $proveedor->telefono }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="direccion" class="col-sm-1 col-form-label">{{ 'Direccion' }}</label>
                <div class="col-sm-3">
                    <input type="textarea" name="direccion" class="form-control" id="direccion" value="{{ $proveedor->direccion }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="submit" value="Editar" class="btn btn-success">
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-danger" href="{{ url('proveedores') }}">Regresar</a>
                </div>
            </div>

        </form>
</div>
@endsection