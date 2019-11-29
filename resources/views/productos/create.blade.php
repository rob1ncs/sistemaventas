@extends('layouts.app')

@section('content')
@inject('proveedores', 'App\Http\Controllers\TblProveedorController')
@inject('categorias', 'App\Http\Controllers\TblCategoriaController')

<div class="container" style="margin-top:80px;">
    <form action="{{ url('/productos')}}" method="post">

        {{ csrf_field() }}


        <div class="form-group row">
                <h3>Crear Productos</h3>
            </div>
            <hr>
            <div class="form-group row">
                <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcion" class="col-sm-1 col-form-label">{{ 'Descripcion' }}</label>
                <div class="col-sm-3">
                    <input type="textarea" name="descripcion" class="form-control" id="descripcion" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="precio" class="col-sm-1 col-form-label">{{ 'Precio' }}</label>
                <div class="col-sm-3">
                    <input type="number" name="precio" class="form-control" id="precio" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-1 col-form-label">{{ 'Stock' }}</label>
                <div class="col-sm-3">
                    <input type="number" name="stock" class="form-control" id="stock" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-1 col-form-label">{{ 'Foto' }}</label>
                <div class="col-sm-3">
                    <input type="file" name="foto" class="form-control" id="foto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_proveedor" class="col-sm-1 col-form-label">{{ 'Proveedor' }}</label>
                <div class="col-sm-3">
                    <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                        @foreach ($proveedores->get() as $index =>$proveedor)
                            <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                                {{ $proveedor }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_categoria" class="col-sm-1 col-form-label">{{ 'Categoria' }}</label>
                <div class="col-sm-3">
                    <select name="id_categoria" id="id_categoria" class="form-control" required>
                        @foreach ($categorias->get() as $index =>$categoria)
                            <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                                {{ $categoria }}
                            </option>
                        @endforeach
                    </select>
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
                    <a class="btn btn-danger" href="{{ url('productos') }}">Regresar</a>
                </div>
            </div>
    </form>
</div>


@endsection
