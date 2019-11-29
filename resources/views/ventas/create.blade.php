@extends('layouts.app')

@section('content')
<div class="container">
    
        {{ csrf_field() }}
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
                                    <th>Item</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
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
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <form action="{{ url('/detalle/'.$producto->id)}}" method="get" >
                                            <h3><input class="btn btn-success" type="submit" value="Generar boleta"></h3>
                                        </form>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            @endforeach
                        </table>
                </div>
                </div>
                
    
    {{-- <a href="{{ url('productos/create') }}">Agregar producto</a> --}}
    
    
</div>

@endsection