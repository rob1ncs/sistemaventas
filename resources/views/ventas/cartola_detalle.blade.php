
@extends('layouts.app')



@section('content')


<div class="container">
        <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>RUT</th>
                        <th>NOMBRE</th>
                        <th>FECHA</th>
                        <th>MEDIO DE PAGO</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
        
                <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->rut }}</td>
                        <td>{{ $producto->nombre }} &nbsp; {{ $producto->apellido }}</td>
                        <td>{{ $producto->fecha}}</td>
                        <td>{{ $producto->medio_pago}}</td>
                        <td>{{ $producto->total }}</td>
                        <td>
                            <a href="{{ url('/obtener_detalle/'.$producto->id) }}" class="btn btn-info">
                                DETALLE
                            </a>
                        </td>
                        {{-- <td>
                            <form method="post" action="{{ url('/proveedores/'.$producto->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿ Está seguro ?')">Borrar</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
                </tbody>
            </table>

</div>

    

 


  @endsection