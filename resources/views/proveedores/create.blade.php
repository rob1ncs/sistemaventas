<form action="{{ url('/proveedores')}}" method="post">
    {{ csrf_field() }}
    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="telefono">{{ 'telefono' }}</label>
    <input type="number" name="telefono" id="telefono">
    <br>

    <label for="direccion">{{ 'direccion' }}</label>
    <input type="text" name="direccion" id="direccion">
    <br>

    <input type="submit" value="Agregar">
</form>