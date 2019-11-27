@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($productos as $producto)
        <div class="col-md-3">
            <div class="card text-white mb-3">
                <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:50%">
                <div class="card-body">
                <h4 class="card-title">{{ $producto->nombre }}</h4>
                    <p class="card-text" style="width: 100%">{{ $producto->descripcion }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <p> ${{ $producto->precio }}</p>
                    </small>
                    <a href="{{ url('/ver/'.$producto->id) }}" class="btn btn-primary">Ver producto</a>
                </div>
            </div>
            <br><br>
        </div>
        @endforeach
  </div>
</div>
@endsection