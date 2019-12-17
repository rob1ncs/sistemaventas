
@extends('layouts.app')

@section('content')


<div class="container">
  
    <div class="row justify-content-justify">
      @foreach($detalles as $detalle)
      <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                      <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$detalle->foto }}" alt="" style="width:75%;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 class="card-title">{{ $detalle->nombre }}</h4>
                    <p class="card-text">{{ $detalle->descripcion }}</p>
                    <p class="card-text">Cantidad : {{ $detalle->cantidad }} </p>
                    <p class="card-text">Monto : {{ $detalle->precio }} </p>
                  </div>
                  <div class="card-footer text-center">
                          
                  </div>
                </div>
              </div>
          </div>
          <hr>
      @endforeach
      <div class="row">
              <div class="col-sm-3">
                  <h3><a class="btn btn-danger btn-lg" href="{{ url('factura') }}">Regresar</a></h3>
              </div>
              <div class="col-sm-3">
                  <h3>Total ${{ $total }}</h3>
              </div>
          </div>
          
</div>
  
            
</div>
@endsection

