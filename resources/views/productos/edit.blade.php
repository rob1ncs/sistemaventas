<form action="{{ url('/productos/'.$producto->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
    <br>

    <label for="descripcion">{{ 'descripcion' }}</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}">
    <br>

    <label for="precio">{{ 'precio' }}</label>
    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}">
    <br>

    <label for="stock">{{ 'stock' }}</label>
    <input type="number" name="stock" id="stock" value="{{ $producto->stock }}">
    <br>
    
    <input type="submit" value="Editar">
    <a href="{{ url('productos') }}">Regresar</a>
</form>