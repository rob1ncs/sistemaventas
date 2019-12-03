@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success" href="{{ url('proveedores/create') }}">Agregar Proveedor</a>
    <hr>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ITEM</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
            </tr>
        </thead>

        <tbody>
        @foreach($proveedores as $producto)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->direccion }}</td>
                <td>{{ $producto->telefono }}</td>
                <td>
                    <a href="{{ url('/proveedores/'.$producto->id.'/edit') }}" class="btn btn-primary">
                        editar
                    </a>
                </td>
                <td>
                <form method="post" action="{{ url('/proveedores/'.$producto->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Está seguro ?')">Borrar</button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{-- MODAL --}}
<div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                
                        <form action="{{ url('/proveedores')}}" method="post">
                            {{ csrf_field() }}
                            
                                <div class="modal-body">
                                    <div class="container-fluid">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="nombre" class="col-sm-1 col-form-label">{{ 'Nombre' }}</label>
                                                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                                                </div>
                                                    
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                        <label for="descripcion" class="col-sm-1 col-form-label">{{ 'Descripcion' }}</label>
                                                
                                                        <textarea style="resize: vertical;" name="descripcion" class="form-control" id="descripcion" required></textarea>
                                                        
                                                </div>
                                                
                                            </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                            <label for="precio" class="col-sm-1 col-form-label">{{ 'Precio' }}</label>
                                                            <input type="number" name="precio" class="form-control" id="precio" required>
                                                            
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                            <label for="stock" class="col-sm-1 col-form-label">{{ 'Stock' }}</label>
                                                            <input type="number" name="stock" class="form-control" id="stock" required>
                                                           
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                            <label for="foto" class="col-sm-1 col-form-label">{{ 'Foto' }}</label>
                                                            <input type="file" name="foto" class="form-control" id="foto" required>
                                                            
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                            <label for="id_proveedor" class="col-sm-1 col-form-label">{{ 'Proveedor' }}</label>
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
                                                            <label for="id_categoria" class="col-sm-1 col-form-label">{{ 'Categoria' }}</label>
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