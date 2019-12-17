@extends('layouts.app')



@section('content')
@inject('proveedores', 'App\Http\Controllers\TblProveedorController')
@inject('categorias', 'App\Http\Controllers\TblCategoriaController')
{{-- href="{{ url('productos/create') }}" --}}
<div class="container">

    <a class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Agregar producto</a>
    <hr>
    <div class="jumbotron jumbotron-fluid">
        <div class="table-responsive">
            <table class="table table-light table-hover table-condensed">
                <thead>
                    <tr class="bg-primary">
                        <th>ITEM</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>&nbsp; PRECIO</th>
                        <th>STOCK</th>
                        <th>ESTADO</th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>&nbsp; ${{ $producto->precio }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->estado }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/productos/'.$producto->id.'/edit') }}">
                                    editar
                                </a>
                            </td>
                            <td>
                                @if($producto->estado == 'activo')
                                <a class="btn btn-danger" href="{{ url('/desactivar/'.$producto->id) }}">
                                    desactivar
                                </a>
                                @else
                                <a class="btn btn-warning" href="{{ url('/activar/'.$producto->id) }}">
                                    activar
                                </a>
                                @endif
                            </td>
                            
                                {{-- {{ url('/productos/'.$producto->id) }} --}}
                                {{-- <form method="post" action="{{ url('/productos/'.$producto->id.'/estado_desactivado') }}">
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar este producto ?')">Borrar</button>
                                </form> --}}
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    </div>
    
</div>

 {{-- MODAL --}}
 <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h3 class="modal-title" id="exampleModalLabel">Registrar Producto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            
                    <form action="{{ url('/productos')}}" method="post">
                        {{ csrf_field() }}
                        
                            <div class="modal-body">
                                <div class="container-fluid">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="nombre" class="col-form-label">{{ 'Nombre' }}</label>
                                                <input type="text" name="nombre" class="form-control" id="nombre" required>
                                            </div>
                                                
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                    <label for="descripcion" class="col-form-label">{{ 'Descripcion' }}</label>
                                            
                                                    <textarea name="descripcion" class="form-control" id="descripcion" required></textarea>
                                                    
                                            </div>
                                            
                                        </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                        <label for="precio" class="col-form-label">{{ 'Precio' }}</label>
                                                        <input type="number" name="precio" class="form-control" id="precio" required>
                                                        
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                        <label for="stock" class="col-form-label">{{ 'Stock' }}</label>
                                                        <input type="number" name="stock" class="form-control" id="stock" required>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                        <label for="foto" class="col-form-label">{{ 'Foto' }}</label>
                                                        <input type="file" name="foto" class="form-control" id="foto" required>
                                                        
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                        <label for="id_proveedor" class="ol-form-label">{{ 'Proveedor' }}</label>
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
                                                <div class="col-sm-12">
                                                        <label for="id_categoria" class="col-form-label">{{ 'Categoria' }}</label>
                                                        <select name="id_categoria" id="id_categoria" class="form-control" required>
                                                            @foreach ($categorias->get() as $index =>$categoria)
                                                                <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                                                                    {{ $categoria }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                
                                            </div>
                                            
                                            {{-- 
                                            <div class="form-group row">
                                                <div class="col-sm-3">
                                                    <input type="submit" value="Agregar" class="btn btn-succes">
                                                </div>
                                                <div class="col-sm-3">
                                                    <a class="btn btn-danger" href="{{ url('productos') }}">Regresar</a>
                                                </div>
                                            </div> --}}
                                </div>
                                    
                            
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Registrar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </form>
            
            
        </div>
    </div>
</div>

@endsection