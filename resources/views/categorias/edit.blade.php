@extends('layouts.app')

@section('content')
<div class="container" id="contenedor" style="margin-top: 80px;">
        <form action="{{ url('/categorias/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group row">
                        <h3>Editar Categoria</h3>
                </div>
                    <hr>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                        <div class="col-sm-3">
                            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $categoria->nombre }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-1 col-form-label">{{ 'Descripcion' }}</label>
                        <div class="col-sm-3">
                            <input type="textarea" name="descripcion" class="form-control" id="descripcion" value="{{ $categoria->descripcion }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <input class="btn btn-success" type="submit" value="Editar">
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-danger" href="{{ url('categorias') }}">Regresar</a>
                        </div>
                    </div>
                
        </form>
</div>
@endsection