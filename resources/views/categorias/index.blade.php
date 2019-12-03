@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{ url('categorias/create') }}">Agregar categoria</a>

    <hr>
    <table class="table table-light">
        <thead class="thead-light">
            <tr class="bg-primary">
                <th>ITEM</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('/categorias/'.$categoria->id.'/edit') }}">
                        editar
                    </a>
                </td>
                <td>
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

@endsection