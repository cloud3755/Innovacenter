<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/componentes/jquery/dist/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/Personalizados.css">




        <title>Laravel</title>

    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="#" target="_blank" style="color:#FBF9F9;">Innova-center VG</a>
          </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Nuestros servicios</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mision e Inteligencia<b class="caret"></b></a>
             <ul class="dropdown-menu">
               <li><a href="#">Mision</a></li>
               <li><a href="#">Inteligencia del negocio</a></li>
             </ul>
           </li>
          </ul>
        </div>
      </nav>

        <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="/img/IMG_20171121_113729_098.jpg" alt="Los Angeles" style="width:50%;">
            </div>

            <div class="item">
              <img src="/img/red.png" alt="Chicago" style="width:50%;">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only"></span>
          </a>

          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="	glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only"></span>
          </a>
        </div>
      </div>

    </body>
</html>
