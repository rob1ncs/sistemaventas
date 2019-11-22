

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>precio</th>
            
        </tr>
    </thead>

    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <a href="{{ url('/productos/'.$producto->id.'/edit') }}">
                    editar
                </a>
                | 

                <form method="post" action="{{ url('/productos/'.$producto->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('Borrar')">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>