@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ url('/categorias')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                    <h3>Crear Categorias</h3>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                    <div class="col-sm-3">
                        <input type="text" name="nombre" class="form-control" id="nombre" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-1 col-form-label">{{ 'descripcion' }}</label>
                    <div class="col-sm-3">
                        <input type="text" name="descripcion" class="form-control" id="descripcion" required>
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
                        <a class="btn btn-danger" href="{{ url('categorias') }}">Regresar</a>
                    </div>
                </div>
        </form>
</div>
@endsection
