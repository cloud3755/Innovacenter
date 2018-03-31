<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('css')
            <link rel="stylesheet" href="/vendor-plantill/bootstrap/css/bootstrap.css">

            <!-- bootstrap
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
            <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
            -->
            <link href="/vendor-plantill/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

            <link href="/vendor-plantill/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
            <link href="/css/freelancer.css" rel="stylesheet">
            <link rel="stylesheet" href="/css/Personalizados.css">



        @show

                <!-- <script src="/componentes/jquery/dist/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
         -->
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
        @section('navbar')

        @show
            </div>
        </nav>


        <div class="container">
            @yield('content')
        </div>
    </body>

     <!-- Footer -->
          <footer class="footer text-center">
            <div class="container">
              <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Location</h4>
                  <p class="lead mb-0">2215 John Daniel Drive
                    <br>Clark, MO 65243</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                  <h4 class="text-uppercase mb-4">Encuentranos en</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-social text-center rounded-circle" href="">
                        <i class="fa fa-fw fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fa fa-fw fa-google-plus"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fa fa-fw fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fa fa-fw fa-linkedin"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fa fa-fw fa-dribbble"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h4 class="text-uppercase mb-4">Acerca de nosotros</h4>
                  <p class="lead mb-0">Somos una empresa socialmente responsable.</p>
                </div>
              </div>
            </div>

          </div>
          <div class="copyright py-4 text-center text-white">
            <div class="container">
              <small>Copyright &copy; Your Website 2018</small>
            </div>
          </footer>

    @section('scripts')
          <script src="/vendor-plantill/jquery/jquery.min.js"></script>
          <script src="/vendor-plantill/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="/vendor-plantill/jquery-easing/jquery.easing.min.js"></script>
          <script src="/vendor-plantill/magnific-popup/jquery.magnific-popup.min.js"></script>
          <script src="/js/jqBootstrapValidation.js"></script>
          <script src="/js/jqBootstrapValidation.min.js"></script>
          <!--<script src="/js/contact_me.js"></script>-->
          <script src="/js/freelancer.min.js"></script>

          <!--bootstrap-->
          <script src="bootstrap/js/bootstrap.js"></script>
          <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
    @show

</html>
