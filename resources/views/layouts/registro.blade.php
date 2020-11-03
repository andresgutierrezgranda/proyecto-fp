<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Team Statistics</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/style-principal.css') }}" rel="stylesheet">
    <style>
        body{
            background-size: 100%
        }
        @media (max-width: 1150px){
            body{
                background-size: 7000px;
            }
        }
        .color{
            background-color: #38495a;
        }
        .form{
            padding-top: 100px;
            opacity: 1; 
            animation-duration: 1s;
            animation-name: aparecer;
        }
        @keyframes aparecer{
            from{
                opacity: 0; 
            }
            to{
                opacity: 1; 
            }
        }
        .card{
            background-color: rgb(212, 229, 250);
        }
    </style>
    
</head>

<body background="{{asset('img/fondo1.jpg')}}">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top color">
            <div class="container">
              <a class="title" href="/">       
                
                Team <img src="{{ asset('img/logo.png') }}" alt="" class="brand-image" style="opacity: .8">Statistics
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/register">Registrarse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Iniciar sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
                <!-- Content Wrapper. Contains page content -->
                <div class="form">
                    
                    <!-- Main content -->
                    <section class="content">
                        @yield('content')
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
                <footer class="">
    
                </footer>
    
                <!-- /.control-sidebar -->
            </div>
        </div>
    </div>
    
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>