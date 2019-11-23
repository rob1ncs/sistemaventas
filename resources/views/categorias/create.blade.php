@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ url('/categorias')}}" method="post">
            {{ csrf_field() }}
            <label for="nombre">{{ 'nombre' }}</label>
            <input type="text" name="nombre" id="nombre">
            <br>
        
            <label for="descripcion">{{ 'descripcion' }}</label>
            <input type="text" name="descripcion" id="descripcion">
            <br>
        
            <input type="submit" value="Agregar">
            <a href="{{ url('categorias') }}">Regresar</a>
        </form>
</div>
@endsection
