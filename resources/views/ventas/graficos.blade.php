@extends('layouts.app')

@section('content')


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
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                            Productos
                          </button>
                        <hr>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <h2>LALA</h2>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-body">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                            Categorias
                        </button>
                        <hr>
                        <div class="collapse" id="collapseExample1">
                            <h2>LELE</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
            
    
    
</div>
@endsection