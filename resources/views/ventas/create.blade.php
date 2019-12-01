@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                    <div class="col-sm-4">
                        
                    </div>
                    <div class="col-sm-4">
                        <h3><a href="{{ url('/') }}">Agregar nuevo producto</a></h3>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
            </div>
                
                
            <div class="row">
            <hr>
            
                <div class="table-responsive">
                        <table class="table table-sm table-light table-hover">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($productos as $producto)
                            <tbody>
                                    <tr>
                                        <td><img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:50%"></td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>${{ $producto->precio }}</td>
                                        <td>{{ $producto->cantidad }} unidades</td>
                                        <td>${{ $producto->valor }}</td>
                                        <td>
                                            <a href="{{ url('/desactivar_compra/'.$producto->id) }}" class="btn btn-danger">Eliminar del carrito</a>
                                        </td>
                                    </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <td>
                                        <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Generar boleta</a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
            </div>
    </div>


    {{-- MODAL --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/generar_boleta') }}">
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">RUT</label>
                                <input type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">TELEFONO</label>
                                <input type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">EMAIL</label>
                                <input type="text" class="form-control" id="recipient-name" required>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection