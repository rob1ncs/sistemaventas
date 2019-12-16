@extends('layouts.app')

@section('content')


<div class="container">
   
        <div class="jumbotron jumbotron-fluid">
            <div class="row">
                <div class="col-sm-6">
                    
                        {{-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Link with href
                        </a> --}}
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                          Button with data-target
                        </button>
                    
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <table>
                                <thead>

                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($facturas as $fac)
                                            <td>{{ $fac->fecha }}</td>
                                            <td>{{ $fac->total }}</td>
                                            <td>{{ $fac->medio_pago }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                        {{-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Link with href
                        </a> --}}
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                          Button with data-target
                        </button>
                    
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <h2>LALA</h2>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            
            
        </div>
            
    
    
</div>
@endsection