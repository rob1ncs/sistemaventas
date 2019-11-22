<form action="{{ url('/productos')}}" method="post">
{{ csrf_field() }}
    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
    <br>

    <label for="descripcion">{{ 'descripcions' }}</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}">
    <br>

    <label for="precio">{{ 'precios' }}</label>
    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}">
    <br>

    <label for="stock">{{ 'stocks' }}</label>
    <input type="number" name="stock" id="stock" value="{{ $producto->stock }}">
    <br>
    
    <label for="id_categoria">{{ 'categoria' }}</label>
    <select name="id_categoria" id="id_categoria" value="{{ $producto->categoria }}">
        <option value="0">Selecione categoria</option>
        <option value="1">Categoria 1</option>
        <option value="2">Categoria 2</option>
    </select>
    <br>

    <label for="id_proveedor">{{ 'proveedor' }}</label>
    <select name="id_proveedor" id="id_proveedor">
        <option value="">Selecione proveedor</option>
        <option value="1">proveedor 1</option>
        <option value="2">proveedor 2</option>
    </select>
    <br>
    <input type="submit" value="Agregar">
</form>