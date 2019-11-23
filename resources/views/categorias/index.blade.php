@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('categorias/create') }}">Agregar categoria</a>
    <hr>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>descripcion</th>
                
            </tr>
        </thead>

        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                    <a href="{{ url('/categorias/'.$categoria->id.'/edit') }}">
                        editar
                    </a>
                    | 

                    <form method="post" action="{{ url('/categorias/'.$categoria->id) }}">
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