<form action="{{ url('/clientes')}}" method="post">
    {{ csrf_field() }}
    <label for="rut">{{ 'rut' }}</label>
    <input type="text" name="rut" id="rut">
    <br>

    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="apellido">{{ 'apellido' }}</label>
    <input type="text" name="apellido" id="apellido">
    <br>

    <label for="telefono">{{ 'telefono' }}</label>
    <input type="number" name="telefono" id="telefono">
    <br>

    <label for="email">{{ 'email' }}</label>
    <input type="text" name="email" id="email">
    <br>

    <input type="submit" value="Agregar">
</form>