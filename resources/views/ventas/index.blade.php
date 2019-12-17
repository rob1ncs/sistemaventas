@extends('layouts.app')

@section('content')



<div class="container">
            
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ URL::asset('storage/uploads').'/'.$producto->foto }}" alt="" style="width:75%;">
                            <div class="card-body ">
                                <h4 class="card-title">{{ $producto->nombre }}</h4>
                                <p class="card-text text-justify" style="width: 100%">{{ $producto->descripcion }}</p>
                            </div>
                            <div class="card-footer">
                                <form action="{{ url('/detalle')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="number" name="id" id="id" value="{{ $producto->id }}" style="display: none;">
                                    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" style="display: none;">
                                    @if($producto->campo_compra != 'comprando')
                                        <small class="text-muted">
                                            <select name="stock" id="stock">
                                                    @for($i=1;$i<=$producto->stock;$i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                            </select>
                                            Unidades
                                        </small>
                                    @endif
                                    
                                    <small>
                                            <h4>${{ $producto->precio }}</h4>
                                            @if($producto->campo_compra == 'comprando')
                                                <input type="submit" class="btn btn-danger" value="Producto en carrito" disabled>
                                            @else
                                                <input type="submit" class="btn btn-primary" value="Añadir al carrito">
                                            @endif
                                        
                                    </small>
                                </form>
                            </div>
                        </div>
                        <hr>
                    </div>
                    @endforeach

            </div>
</div>
@endsection