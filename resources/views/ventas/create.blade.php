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
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            @foreach($productos as $producto)
                            <tbody>
                                    <tr>
                                        <td><img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:50%"></td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->cantidad }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>
                                            <a href="{{ url('/desactivar_compra/'.$producto->id) }}" class="btn btn-danger">Eliminar del carrito</a>
                                        </td>
                                    </tr>
                                
                            </tbody>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <td>
                                        <a href="{{ url('/generar_boleta') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Generar boleta</a>
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


@endsection