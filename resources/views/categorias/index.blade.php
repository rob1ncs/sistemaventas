@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Agregar categoria</a>

    <hr>
    <table class="table table-light">
        <thead class="thead-light">
            <tr class="bg-primary">
                
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td style="text-align:center">
                    <a class="btn btn-primary" href="{{ url('/categorias/'.$categoria->id.'/edit') }}">
                        editar
                    </a>
                </td>
                <td style="text-align:left">
                    <form method="post" action="{{ url('/categorias/'.$categoria->id) }}">
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
                    {{-- <h3 class="modal-title" id="exampleModalLabel">Registrar Producto</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                
                        <form action="{{ url('/categorias')}}" method="post">
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