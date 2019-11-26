@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @foreach($productos as $producto)
                <div class="col-sm-6">
                    <div class="card-columns" style="width:400px">
                        <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title">{{ $producto->nombre }}</h4>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <p> ${{ $producto->precio }}</p>
                            </small>
                            <a href="{{ url('/productos/'.$producto->id.'/ver') }}" class="btn btn-primary">Ver producto</a>
                        </div>
                    </div>
                    <hr>
                </div>
                
            @endforeach
        
    </div>
         
</div>
{{-- @foreach($productos as $producto)
    <div class="card mb-3" style="max-width: 25%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://www.w3schools.com/bootstrap4/img_avatar5.png" class="card-img" alt="...">...
            </div>
            <div class="col-md-8">
                <div class="card-header">
                    <h3>{{ $producto->nombre }}</h3>
                </div>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">{{ $producto->descripcion }}</small></p>
                </div>
                <div class="card-footer">
                        <small class="text-muted">
                            <p> ${{ $producto->precio }}</p>
                        </small>
                        <a href="{{ url('/productos/'.$producto->id.'/ver') }}" class="btn btn-primary">Ver producto</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Productos</h3>
                    <div class="row">
                            
                        <div class="col-sm-12 col-md-12">
                            @foreach($productos as $producto)
                                <div class="card-group">
                                        <div class="card-group" style="padding: 2%">
                                            <div class="card">
                                                <div class="card-header">{{ $producto->nombre }}</div>
                                                
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <p>{{ $producto->descripcion }}</p>
                                                    </p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">
                                                        <p>{{ $producto->precio }}</p>
                                                    </small>
                                                    <a href="{{ url('/productos/'.$producto->id.'/ver') }}" class="btn btn-primary">Ver producto</a>
                                                </div>
                                            </div>
                                            <p>&nbsp;</p>
                                        </div>
                                        @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div> --}}
@endsection