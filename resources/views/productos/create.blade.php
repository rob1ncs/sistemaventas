@extends('layouts.app')

@section('content')
@inject('proveedores', 'App\Http\Controllers\TblProveedorController')
@inject('categorias', 'App\Http\Controllers\TblCategoriaController')

<div class="container" style="margin-top:80px;">
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

        <label for="foto">{{ 'foto' }}</label>
        <input type="file" name="foto" id="foto">
        <br>
        
        <label for="id_proveedor">{{ 'proveedor' }}</label>
        <select name="id_proveedor" id="id_proveedor">
            @foreach ($proveedores->get() as $index =>$proveedor)
                <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                    {{ $proveedor }}
                </option>
            @endforeach
        </select>
        
        <br>
    
        <label for="id_categoria">{{ 'categoria' }}</label>
        <select name="id_categoria" id="id_categoria">
                @foreach ($categorias->get() as $index =>$categoria)
                    <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                        {{ $categoria }}
                    </option>
                @endforeach
            </select>
        <br>
        <input type="submit" value="Agregar">
        <a class="btn btn-secondary" href="{{ url('productos') }}">Regresar</a>
    </form>
</div>

@endsection
