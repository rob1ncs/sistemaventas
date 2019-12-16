@extends('layouts.app')

@section('content')
<div class="container">

            <div class="row">
                    <div class="col-sm-4">
                        <h3><a class="btn btn-warning btn-lg" href="{{ url('/') }}">Agregar nuevo producto</a></h3>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                    <div class="col-sm-4">
                        <h3><a class="btn btn-danger btn-lg" href="{{ url('/') }}">Regresar</a></h3>
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
                                    <td>@if(count($productos)>0)
                                            <a class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">Generar boleta</a>
                                        @endif

                                    </td>
                                    <td></td>
                                    <td></td>
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
    <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Compra</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/clientes') }}" method="post">
                {{ csrf_field() }}
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="rut" class="col-form-label">RUT</label>
                                <input type="text" class="form-control" name="rut" id="rut" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-form-label">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido" class="col-form-label">APELLIDO</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="pago" class="col-form-label">MEDIO DE PAGO</label>
                                <select name="pago" id="pago" class="form-control">
                                    <option value="efectivo" selected>Efectivo</option>
                                    <option value="debito">Debito</option>
                                    <option value="credito">Credito</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Comprar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection