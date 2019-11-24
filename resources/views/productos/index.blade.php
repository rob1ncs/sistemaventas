@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('productos/create') }}">Agregar producto</a>
    <hr>
    <div class="table-responsive">
            <table class="table table-light table-hover table-condensed">

                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>stock</th>
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
                            <td>
                                <a class="btn btn-primary" href="{{ url('/productos/'.$producto->id.'/edit') }}">
                                    editar
                                </a>
                                <form method="post" action="{{ url('/productos/'.$producto->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Desea borrar este producto ?')">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    
</div>

@endsection