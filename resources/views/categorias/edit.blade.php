@extends('layouts.app')

@section('content')
<div class="container" id="contenedor" style="margin-top: 80px;">
        <form action="{{ url('/categorias/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            
                <label for="nombre">{{ 'nombre' }}</label>
                <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}">
                <br>
            
                <label for="descripcion">{{ 'descripcion' }}</label>
                <input type="text" name="descripcion" id="descripcion" value="{{ $categoria->descripcion }}">
                <br>
            
                <input type="submit" value="Editar">
                <a href="{{ url('categorias') }}">Regresar</a>
        </form>
</div>
@endsection