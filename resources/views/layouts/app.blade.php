
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        {{-- <link src="{{ asset('public/styles.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        
    </head>
    <body>
        @inject('categorias', 'App\Http\Controllers\TblCategoriaController')
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-inverse bg-white shadow-sm navbar-fixed-top" style="margin-bottom: 20px;">
                    <div class="container-fluid links">
                        <div class="navbar-header">
                            
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    &nbsp; INICIO &nbsp;
                                </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Mantenedores <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/productos') }}">Productos</a></li>
                                            <li><a href="{{ url('/proveedores') }}">Proveedores</a></li>
                                            <li><a href="{{ url('/categorias') }}">Categorias</a></li>
                                        </ul>
                                </li>
                                <li><a href="{{ url('/carrito') }}">Carrito de compras</a></li>
                                <li><a href="{{ url('/factura') }}">Ver ventas</a></li>
                                <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            Categorias <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                @foreach ($categorias->get_categorias() as $index =>$categoria)
                                                    <li><a href="{{ url('/producto_categoria/'.$index) }}">{{ $categoria }}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                    </li>
                                    <li><a href="{{ url('/graficos/') }}">Ofertones</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <main role="main">
                    @yield('content')
                </main>
        </div>
    </body>
    <footer class="footer mt-auto py-3">
                
    </footer>
</html>


