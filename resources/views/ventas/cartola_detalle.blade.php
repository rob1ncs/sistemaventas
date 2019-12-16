
@extends('layouts.app')



@section('content')


<div class="container">
    {{-- <div class="row">
        <div class="col-sm-4">
            <h3><a class="btn btn-warning btn-lg" href="{{ url('/graficos/') }}">Ver grafica</a></h3>
        </div>
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-4">
            
        </div>
    </div>
    <hr> --}}
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
                @foreach($facturas as $factura)
                    <tr>
                        <td>{{ $factura->rut }}</td>
                        <td>{{ $factura->nombre }} &nbsp; {{ $factura->apellido }}</td>
                        <td>{{ $factura->fecha}}</td>
                        <td>{{ $factura->medio_pago}}</td>
                        <td>{{ $factura->total }}</td>
                        <td>
                            <a href="{{ url('/obtener_detalle/'.$factura->id) }}" class="btn btn-info">
                                DETALLE
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

</div>


  @endsection