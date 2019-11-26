@extends('layouts.app')

@section('content')
<!-- <div class="container" style="margin-top:80px;">
    <div class="row">
        <div class="col-sm-4">
        <div class="card-columns">
        @foreach($productos as $producto)
        <div class="card">
            <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:50%">
            <div class="card-body">
            <h4 class="card-title">{{ $producto->nombre }}</h4>
                <p class="card-text" style="width:50%">{{ $producto->descripcion }}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">
                    <p> ${{ $producto->precio }}</p>
                </small>
                <a href="{{ url('/productos/'.$producto->id.'/ver') }}" class="btn btn-primary">Ver producto</a>
            </div>
        </div>
        @endforeach
        <hr>
        </div>
        
    </div>
    </div>
                    
</div> -->
<div class="container" style="margin-top:80px;">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4">
            <div class="card text-white bg-dark  mb-3">
                <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:30%">
                <div class="card-body">
                <h4 class="card-title">{{ $producto->nombre }}</h4>
                    <p class="card-text" style="width: auto">{{ $producto->descripcion }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <p> ${{ $producto->precio }}</p>
                    </small>
                    <a href="{{ url('/productos/'.$producto->id.'/ver') }}" class="btn btn-primary">Ver producto</a>
                </div>
            </div>
            <br><br>
        </div>
        @endforeach
  </div>
</div>
@endsection