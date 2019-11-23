<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            CIISA
                        </a>
                        
                      <ul class="nav navbar-nav mr-auto">
                        <li><a href="{{ url('/productos') }}">Mantenedor de Producto</a></li>
                        <li><a href="{{ url('/clientes') }}">Mantenodr de clientes</a></li>
                        <li><a href="#">Page 3</a></li>
                      </ul>
                      
                    </div>
                </nav> --}}
                <nav class="navbar navbar-expand-md navbar-inverse bg-white shadow-sm">

                    <div class="container-fluid links">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                &nbsp;CIISA&nbsp;
                            </a>
                        </div>
                        <div class="text-center">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Mantenedores <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/productos') }}">Productos</a></li>
                                            <li><a href="{{ url('/proveedores/create') }}">Proveedores</a></li>
                                            <li><a href="{{ url('/categorias/create') }}">Categorias</a></li>
                                        </ul>
                                </li>
                                <li><a href="#">Ventas</a></li>
                                <li><a href="#">Page 3</a></li>
                            </ul>
                        </div>
                    </div>
                </nav> 
        {{-- <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="links">
                    <a href="{{ url('/productos') }}">Productos</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div> --}}
    </body>
</html>
