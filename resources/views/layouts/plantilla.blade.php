<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Team Statistics</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item text-center">
                        @yield('nav')
                    </li>
                    
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-secondary elevation-4">
                <!-- Logo -->
                <a href="{{ url('/presentacion') }}" class="brand-link">
                    <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">Team Statistics</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            @if ( Auth::User()->ruta == "Sin imagen" )
                                <img src="{{ asset('img/escudo.png') }}" class="img-circle elevation-2" alt="User Image">
                            @else
                                <img src="{{ asset('images/'.Auth::User()->ruta) }}" class="img-circle elevation-2" alt="User Image">
                            @endif
                        </div>
                        <div class="info text-center">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="">{{ __('Iniciar Sesión') }}</a>
                                @else
                                
                                <p>Equipo: {{ Auth::user()->equipo }}</p>
                                <a class="dropdown-item text-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="{{ url('jugador') }}"
                                    class="{{ Request::path() === 'jugador' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Plantilla
                                        <?php use App\Jugador; $jugadores_count = Jugador::all()->where('id_users', auth()->id())->count(); ?>
                                        <span class="right badge">{{ $jugadores_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('partido') }}"
                                    class="{{ Request::path() === 'partido' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-futbol"></i>
                                    <p>
                                        Partido
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('estadisticas') }}"
                                    class="{{ Request::path() === 'estadisticas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-sticky-note"></i>
                                    <p>
                                        Estadisticas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('configuracion') }}"
                                    class="{{ Request::path() === 'configuracion' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Configuración
                                    </p>
                                </a>
                            </li>
                            @if (Auth::User()->rol == 1)
                                <li class="nav-item">
                                    <a href="{{ url('usuarios') }}"
                                        class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="nav-icon fas fa-cog"></i>
                                        <p>
                                            Usuarios
                                        </p>
                                    </a>
                                </li>
                            @endif
                            

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">


                <!-- Contenido principal -->
                <section class="content">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                Team Statistics © 2020
            </footer>
        </div>
    </div>
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>