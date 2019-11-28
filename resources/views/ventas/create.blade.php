@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <a href="{{ url('productos/create') }}">Agregar producto</a> --}}
    <div class="row">
        <div class="col-sm-4">
            <h3><a href="#">GENERAR BOLETA</a></h3>
            
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
            <table class="table table-light table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>Cantidad</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td><input type="number" ></td>
                            
                            <td>
                                <a href="{{ url('/desactivar_compra/'.$producto->id) }}" class="btn btn-danger">Eliminar del carrito</a>
                            </td>
                            {{-- <td>
                                <a class="btn btn-primary" href="{{ url('/desactivar/'.$producto->id) }}">
                                    desactivar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/activar/'.$producto->id) }}">
                                    activar
                                </a>
                            </td> --}}

                                {{-- {{ url('/productos/'.$producto->id) }} --}}
                                {{-- <form method="post" action="{{ url('/productos/'.$producto->id.'/estado_desactivado') }}">
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar este producto ?')">Borrar</button>
                                </form> --}}
                            
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
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

@endsection