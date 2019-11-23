@extends('layouts.app')

@section('content')
<div class="container">
        <form action="{{ url('/proveedores/'.$proveedor->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            
                <label for="nombre">{{ 'nombre' }}</label>
                <input type="text" name="nombre" id="nombre" value="{{ $proveedor->nombre }}">
                <br>
            
                <label for="telefono">{{ 'telefono' }}</label>
                <input type="text" name="telefono" id="telefono" value="{{ $proveedor->telefono }}">
                <br>
            
                <label for="direccion">{{ 'direccion' }}</label>
                <input type="text" name="direccion" id="direccion" value="{{ $proveedor->direccion }}">
                <br>
            
                <input type="submit" value="Editar">
                <a href="{{ url('proveedores') }}">Regresar</a>
        </form>
</div>
@endsection