@extends('layouts.app')

@section('content')
<div class="container">
        
        <a href="{{ url('proveedores/create') }}">Agregar Proveedor</a>
    <hr>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>telefono</th>
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
                    <a href="{{ url('/proveedores/'.$producto->id.'/edit') }}">
                        editar
                    </a>
                    | 

                    <form method="post" action="{{ url('/proveedores/'.$producto->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿ Está seguro ?')">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection