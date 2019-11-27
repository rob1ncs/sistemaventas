@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('productos/create') }}">Agregar producto</a>
    <hr>
    <div class="table-responsive">
            <table class="table table-light table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>estado</th>
                        <th></th>
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
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->estado }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/productos/'.$producto->id.'/edit') }}">
                                    editar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/desactivar/'.$producto->id) }}">
                                    desactivar
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/activar/'.$producto->id) }}">
                                    activar
                                </a>
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

@endsection