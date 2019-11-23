@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/productos')}}" method="post">
        {{ csrf_field() }}
    
        
        <label for="nombre">{{ 'nombre' }}</label>
        <input type="text" name="nombre" id="nombre">
        <br>
    
        <label for="descripcion">{{ 'descripcion' }}</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
    
        <label for="precio">{{ 'precio' }}</label>
        <input type="number" name="precio" id="precio">
        <br>
    
        <label for="stock">{{ 'stock' }}</label>
        <input type="number" name="stock" id="stock">
        <br>
        
        <label for="id_categoria">{{ 'categoria' }}</label>
        <select name="id_categoria" id="id_categoria">
            <option value="0">Selecione categoria</option>
            <option value="1">Categoria 1</option>
            <option value="2">Categoria 2</option>
        </select>
        <br>
    
        <label for="id_proveedor">{{ 'proveedor' }}</label>
        <select name="id_proveedor" id="id_proveedor">
            <option value="0">Selecione proveedor</option>
            <option value="1">proveedor 1</option>
            <option value="2">proveedor 2</option>
        </select>
        <br>
        <input type="submit" value="Agregar">
        <a href="{{ url('productos') }}">Regresar</a>
    </form>
</div>

@endsection
