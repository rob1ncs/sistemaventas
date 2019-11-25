
<div class="wrapper">
<div class="sidebar">
<h2>Sidebar</h2>
<ul>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
</ul>
</div>
{{-- <nav class="navbar navbar-expand-md navbar-inverse bg-white shadow-sm">

    <div class="container-fluid links">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                &nbsp;CIISA&nbsp;
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
                <li><a href="#">Ventas</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            
        </div>
        
    </div>
</nav>  --}}
</div>
<main class="py-4">
@yield('content')
</main>
    