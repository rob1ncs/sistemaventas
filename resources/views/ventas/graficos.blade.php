@extends('layouts.app')

@section('content')
@inject('getproductos', 'App\Http\Controllers\TblProductoController')
@inject('getcategorias', 'App\Http\Controllers\TblCategoriaController')

<div class="container">
   
        <div class="jumbotron jumbotron-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-light table-hover">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Fecha</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                @foreach($facturas as $fac)
                                <tbody>
                                        <tr>
                                            <td>{{ $fac->fecha }}</td>
                                            <td>{{ $fac->total }}</td>
                                        </tr>
                                </tbody>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                    </div>
                        
                </div>
                
                
                
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-body">
                            <div class="card card-body">
                                <h2>Productos</h2>
                                <div class="table-responsive">
                                    <form action="{{ url('/actualiza_precio') }}" method="get">
                                        {{ csrf_field() }}
                                        <table class="table table-sm table-light table-hover">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>Producto</th>
                                                    <th style="text-align: center">Total</th>
                                                </tr>
                                            </thead>
                                            @foreach($productos as $prod)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $prod->nombre }}</td>
                                                    <td style="text-align: center">{{ $prod->total }}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                            <hr>
                                            <tfoot>
                                                
                                                    <tr>
                                                        <td>
                                                            <label for="id_producto" class="col-form-label">{{ 'Producto' }}</label>
                                                            <select name="id_producto" id="id_producto" class="form-control" required>
                                                                @foreach ($getproductos->get_productos() as $index =>$producto)
                                                                    <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                                                                        {{ $producto }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="porcentaje" class="col-form-label">{{ '% Descuento' }}</label>
                                                            <input type="text" name="porcentaje" id="porcentaje" class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button type="submit" class="btn btn-success">Generar combo</button>
                                                        </td>
                                                    </tr>
                                                
                                            </tfoot>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h2>Categorias</h2>
                            <div class="table-responsive">
                                <form action="{{ url('/actualiza_precio') }}" method="get">
                                    {{ csrf_field() }}
                                    <table class="table table-sm table-light table-hover">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th>Categoria</th>
                                                <th style="text-align: center">Total</th>
                                            </tr>
                                        </thead>
                                        @foreach($categorias as $cat)
                                        <tbody>
                                                <tr>
                                                    <td>{{ $cat->nombre }}</td>
                                                    <td style="text-align: center">{{ $cat->total }}</td>
                                                </tr>
                                        </tbody>
                                        @endforeach
                                        <hr>
                                        <tfoot>
                                            <tr>
                                                <td>
                                                    <label for="id_categoria" class="col-form-label">{{ 'Categoria' }}</label>
                                                    <select name="id_categoria" id="id_categoria" class="form-control" required>
                                                        @foreach ($getcategorias->get() as $index =>$categoria)
                                                            <option value="{{ $index }}" {{ old('id') == $index ? 'selected': '' }}>
                                                                {{ $categoria }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="porcentaje" class="col-form-label">{{ '% Descuento' }}</label>
                                                    <input id="porcentaje" name="porcentaje" type="text" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="submit" class="btn btn-success">Registrar</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        
        </div>
            
            
            
        
            
    
    
</div>
@endsection