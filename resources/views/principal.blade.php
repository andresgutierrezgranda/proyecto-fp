<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Statistics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-principal.css') }}"></head>
    <style>
      body{
        background-color: rgb(212, 229, 250);
      }

      header{
        padding-top: 200px;
        padding-bottom: 200px;
        background-size: 100%;
        background-image: url({{asset('img/fondo1.jpg')}});
      }
      @media (max-width: 950px){
            header{
                background-size: 900px;
            }
        }
      nav{
   background-color: #38495a;
   
}
#barraaceptacion {
    display:none;
    position:fixed;
    left:0px;
    right:0px;
    bottom:0px;
    padding-bottom:20px;
    width:100%;
    text-align:center;
    min-height:40px;
    background-color: rgba(0, 0, 0, 0.5);
    color:#fff;
    z-index:99999;
}
 
.inner {
    width:100%;
    position:absolute;
    padding-left:5px;
    font-family:verdana;
    font-size:12px;
    top:30%;
}
 
.inner a.ok {
    padding:4px;
    color:#00ff2e;
    text-decoration:none;
}
 
.inner a.info {
    padding-left:5px;
    text-decoration:none;
    color:#faff00;
}
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
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
  
  <header class="masthead text-center text-white mt-5">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Gestiona tu equipo</h1>
          <h2 class="masthead-subheading mb-0">Fácilmente con un solo click</h2>
          <a href="/register" class="btn btn-primary btn-xl rounded-pill mt-5">Empieza ya</a>
        </div>
      </div>
    </header>
  
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img src="{{ asset('img/logo.png') }}" alt="" class="brand-image" style="opacity: .8">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">¿Qué es Team Statistics?</h2>
              <p>Team Statistics es una aplicacion web que te permitirá ver las estadísticas de tus jugadores y gestionar a tu equipo de manera eficiente.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <a data-flickr-embed="true" href="https://www.flickr.com/photos/tomco357/14201777451/in/photolist-nCXPDV-a6d5H4-RGgZMP-eMfLo4-eT9wCy-eUa1FJ-eegtBC-eMfuHk-e3YfR1-ce3EML-7Re5kR-bqaZ6f-7Re6gR-2Rx69r-23776c-oR7N26-4GApYg-r9EJ3-caYFDC-Heexn-cfuJqG-29qJp-RwacA-r9ESf-qmwrG-bTs3e-eMrVjw-r9Fy3-37kizE-Fg6apV-YW8Fif-64cs4U-rgHs5t-eMs8Fb-8BCWev-ce3Fq5-9Rvsjd-p8cae-kWgdR-4yHQp9-8Ha6gX-TvwXwz-25tAkB-23biHW-r9Hjo-23bCC9-n37enH-drVryU-equDeJ-3JUghK" title="soccer"><img src="https://live.staticflickr.com/2913/14201777451_4502658457_k.jpg" width="100%" height="100%" alt="soccer"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Características</h2>
              <p>Team Statistics te permitirá introducir tantos jugadores como quieras, poner su nombre, edad, posición y fotos. En el apartado de partido podras introducir manualmente datos como los minutos, si fue titular. tarjetas, goles y asistencias. En estadísticas podrás ver los mejores jugadores en cada dato</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">¿Que es el "BigData" en el fútbol?</h2>
              <p>Por Big Data entendemos el almacenamiento de gran volumen de datos y, sobre todo, los procedimientos usados a la hora de convertir los datos en información que facilite la toma de decisiones.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive display-1" src="https://www.youtube.com/embed/FX9X9IJop5A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img src="{{ asset('img/logo2.png') }}" alt="" class="brand-image" style="width: 60px">
              <p>Copyright &copy; Team Statistics 2020</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
                
                <p>Ayuda</p>
                <p class="m-0 text-white small text-dark">Email: info@teamstatistics.com</p>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>
    <!--//BLOQUE COOKIES-->
    <div id="barraaceptacion" style="display: block;">
      <div class="inner">
          Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
          Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
          <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
          <a href="http://politicadecookies.com" target="_blank" class="info">Más información</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      function getCookie(c_name){
          var c_value = document.cookie;
          var c_start = c_value.indexOf(" " + c_name + "=");
          if (c_start == -1){
              c_start = c_value.indexOf(c_name + "=");
          }
          if (c_start == -1){
              c_value = null;
          }else{
              c_start = c_value.indexOf("=", c_start) + 1;
              var c_end = c_value.indexOf(";", c_start);
              if (c_end == -1){
                  c_end = c_value.length;
              }
              c_value = unescape(c_value.substring(c_start,c_end));
          }
          return c_value;
      }
       
      function setCookie(c_name,value,exdays){
          var exdate=new Date();
          exdate.setDate(exdate.getDate() + exdays);
          var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
          document.cookie=c_name + "=" + c_value;
      }
       
      if(getCookie('tiendaaviso')!="1"){
          document.getElementById("barraaceptacion").style.display="block";
      }
      function PonerCookie(){
          setCookie('tiendaaviso','1',365);
          document.getElementById("barraaceptacion").style.display="none";
      }
      </script>
 </body>
</html>