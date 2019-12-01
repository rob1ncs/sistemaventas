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
                                <form action="{{ url('/detalle')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="number" name="id" id="id" value="{{ $producto->id }}" style="display: none;">
                                    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" style="display: none;">
                                    <small class="text-muted">
                                        <select name="stock" id="stock">
                                                @for($i=1;$i<=$producto->stock;$i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                        Unidades
                                    </small>
                                    <small>
                                            <p> ${{ $producto->precio }}</p>
                                            @if($producto->estado != 'comprando')
                                                <input type="submit" class="btn btn-primary" value="Añadir al carrito">
                                            @else
                                                <input type="submit" class="btn btn-primary" value="Añadir al carrito" disabled>
                                            @endif
                                            {{-- <a href="{{ url('/comprando/'.$producto->id) }}" class="btn btn-primary">Añadir al carrito</a> --}}
                                        
                                    </small>
                                </form>
                            <br>
                            <br>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    @endforeach
              </div>
    
    
</div>
@endsection