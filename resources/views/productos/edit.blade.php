@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ url('/productos/'.$producto->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <div class="form-group row">
                    <h3>Editar Producto</h3>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                    <div class="col-sm-3">
                        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $producto->nombre }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-1 col-form-label">{{ 'Descripcion' }}</label>
                    <div class="col-sm-3">
                        <input type="textarea" name="descripcion" class="form-control" id="descripcion" value="{{ $producto->descripcion }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="precio" class="col-sm-1 col-form-label">{{ 'Precio' }}</label>
                    <div class="col-sm-3">
                        <input type="number" name="precio" class="form-control" id="precio" value="{{ $producto->precio }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-1 col-form-label">{{ 'Stock' }}</label>
                    <div class="col-sm-3">
                        <input type="number" name="stock" class="form-control" id="stock" value="{{ $producto->stock }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <hr>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <input type="submit" value="Actualizar" class="btn btn-success">
                    </div>
                    <div class="col-sm-3">
                        <a class="btn btn-danger" href="{{ url('productos') }}">Regresar</a>
                    </div>
                </div>
            </form>
</div>

@endsection