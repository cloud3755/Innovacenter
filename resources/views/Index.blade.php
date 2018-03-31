@extends('layouts.Master')
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
            @section('navbar')
            @parent
              <a class="navbar-brand js-scroll-trigger" href="#carouselMain">Innova Center VG</a>
              <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Nuestros Servicios</a>
                  </li>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Inteligencia del negocio</a>
                  </li>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacto</a>
                  </li>
                  <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Mapa">Cobertura</a>
                  </li>
                </ul>
              </div>
            @stop
@section('content')

          <!-- Header
          <header class="masthead bg-primary text-white text-center">
            <div class="container">
              <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
              <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
              <hr class="star-light">
              <h2 class="font-weight-light mb-0">Web Developer - Graphic Artist - User Experience Designer</h2>
            </div>
          </header>
          -->
         <!-- Header 2 -->
        <div id="carouselMain" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/Innova-center.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Innova-center.png">
            </div>
          </div>
          <a class="carousel-control-prev carousel-control" href="#carouselMain" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next carousel-control" href="#carouselMain" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


          <!-- Portfolio Grid Section -->
          <section class="portfolio" id="portfolio">
            <div class="container">
              <h2 class="text-center text-uppercase text-secondary mb-0">Servicios</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cobranza.jpg" alt="">
                    <p class="text-center">Cobranza Legal</p>
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cobranzatel.jpg" alt="">
                    <p class="text-center">Cobranza Telefonica</p>
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cobranza-dom.jpg" alt="">
                    <p class="text-center">Cobranza Domiciliaria</p>
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/asesoria.png" alt="">
                    <p class="text-center" >Asesoria y ejecucion</p>
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/validacion.png" alt="">
                    <p class="text-center" >Verificacion y validacion de credito</p>
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/soprtetecnico.jpg" alt="">
                    <p class="text-center" >Atencion a clientes</p>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <!-- About Section -->
          <section class="bg-primary text-white mb-0" id="about">
            <div class="container">
              <h2 class="text-center text-uppercase text-white">Inteligencia del negocio</h2>
              <hr class="star-light mb-5">
              <div class="row">
                <div class="col-lg-4 ml-auto">
                  <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                  <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
              </div>
              <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="#">
                  <i class="fa fa-download mr-2"></i>
                  Download Now!
                </a>
              </div>
            </div>
          </section>

          <section class="bg-primary text-white mb-0" id="Mapa">
            <div class="container" id="validar"style="border-left-style: solid;">
              <h2 class="text-center text-uppercase text-secondary mb-0">Cobertura</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 ml-auto">
                  <div id="map">

                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ml-auto">
                    <h2> <p class="text-center" id="cabecera" style="color:black; border-left-style: solid;"></p> </h2>
                    <h3> <p class="text-center" id="contactopersona" style="color:black; border-left-style: solid;"></p> </h3>
                    <p class="text-center" id="escribir" style="color:black; border-left-style: solid;"></p>
                    <p class="text-center" id="telefono" style="color:black; border-left-style: solid;"></p>
                </div>
              </div>
            </div>
          </section>


          <section id="contact">

            <div class="container">
              <h2 class="text-center text-uppercase text-secondary mb-0">Contactanos</h2>
              <h2 class="text-center text-uppercase text-secondary mb-0" id="tipomensaje"></h2>
              <hr class="star-dark mb-5">
              <div class="row">

                <center>
                  <button type="button" class="btn btn-info" id="btncontacto">Contactanos</button>
                  <button type="button" class="btn btn-info" id="btnquejas">Quejas</button>
                </center>

                <div class="col-lg-6 mx-auto" id="ocultar">
                  <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Email Address</label>
                        <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Phone Number</label>
                        <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                      </div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>

          <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
          <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
          <!-- Modal -->


          <!-- Portfolio Modal 1 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Cobranza Legal</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Modal 2 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Cobranza telefonica</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Modal 3 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Cobranza domiciliaria</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Modal 4 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Asesoria</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Modal 5 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Verificacion y validacion de credito</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Modal 6 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Atencion a clientes</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @section('scripts')
          @parent
          <!-- colocar la animacion de la informacion de los contactos -->

          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLQwkZF3EFZTOBqjHkCpO_J2HZ3be6y6s"></script>
          <script src="/vendor-plantill/jquery/jquery.min.js"></script>

          <script type="text/javascript">

          $( document ).ready(function() {
                    initMap();

                    $('#ocultar').hide();

                    $("#btnquejas").on( "click", function() {
                      $('#ocultar').show();
                      $('#tipomensaje').html('Queja')
                     });

                   $("#btncontacto").on( "click", function() {

                     $('#ocultar').show();

                     $('#tipomensaje').html('Contactanos')
                    });
                });

                function initMap() {
                    var jalisco = {lat: 20.659699, lng: -103.349609};
                    var nuevoleon = {lat: 25.592172, lng: -99.996195};
                    var cdmexico = {lat: 19.432608, lng: -99.133208};

                    var textojalisco = '<div style="color:#080808;"> <p> <u> Innova-center VG Jalisco </u> </p>  </div>';

                    var textonuevoleon = '<div style="color:#080808;"> <p> <u> Innova-center VG Nuevo leon </u> </p>  </div>';

                    var textocdmexico = '<div style="color:#080808;"> <p> <u> Innova-center VG Cd de Mexico </u> </p>  </div>';

                    var infowindow = new google.maps.InfoWindow({
                        content: textojalisco
                    });

                    var infowindowNuevoleon = new google.maps.InfoWindow({
                        content: textonuevoleon
                    });

                    var infowindowcdmexico = new google.maps.InfoWindow({
                        content: textocdmexico
                    });

                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 5,
                      center: jalisco,
                      label:'Jalisco'
                    });

                    var marker = new google.maps.Marker({
                      position: jalisco,
                      map: map,
                      title: 'Jalisco',
                      animation: google.maps.Animation.DROP
                    });

                    var marker2 = new google.maps.Marker({
                      position: nuevoleon,
                      map: map,
                      title: 'Nuevo leon',
                      animation: google.maps.Animation.DROP
                    });

                    var marker3 = new google.maps.Marker({
                      position: cdmexico,
                      map: map,
                      title: 'Cd. Mexico',
                      animation: google.maps.Animation.DROP
                    });
                    //
                    // map.addListener('center_changed', function() {
                    //   // 3 seconds after the center of the map has changed, pan back to the
                    //   // marker.
                    //   window.setTimeout(function() {
                    //     map.panTo(marker.getPosition());
                    //   }, 3000);
                    // });

                    marker.addListener('mouseover', function() {
                      map.setZoom(6);
                      map.setCenter(marker.getPosition());

                      $('#cabecera').html('Jalisco');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindow.open(map, marker);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindow.close();
                      });

                    marker2.addListener('mouseover', function() {
                       map.setZoom(6);
                      map.setCenter(marker2.getPosition());

                      $('#cabecera').html('Nuevo leon');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindowNuevoleon.open(map, marker2);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker2.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindowNuevoleon.close();
                      });

                    marker3.addListener('mouseover', function() {
                      map.setZoom(6);
                      map.setCenter(marker3.getPosition());

                      $('#cabecera').html('Cd. Mexico');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindowcdmexico.open(map, marker3);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker3.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindowcdmexico.close();
                      });

                  }

          </script>
          @stop

@stop
