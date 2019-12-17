@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">Agregar Proveedor</a>
    <hr>
    <div class="jumbotron jumbotron-fluid">
        <table class="table table-light">
            <thead>
                <tr  class="bg-primary">
                    <th>ITEM</th>
                    <th>NOMBRE</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
    
            <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>
                        <a href="{{ url('/proveedores/'.$proveedor->id.'/edit') }}" class="btn btn-primary">
                            editar
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ url('/proveedores/'.$proveedor->id) }}">
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
                                                        <label for="direccion" class="col-sm-1 col-form-label">{{ 'Direccion' }}</label>
                                                
                                                        <input type="text" name="direccion" class="form-control" id="direccion" required>
                                                        
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="telefono" class="col-sm-1 col-form-label">{{ 'Telefono' }}</label>
                                            
                                                    <input type="number" name="telefono" class="form-control" id="telefono" required>
                                                    
                                                </div>
                                                
                                            </div>
                                                  
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