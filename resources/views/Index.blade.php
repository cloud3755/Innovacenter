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
                  <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
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
                <div class="col-lg-12 ml-auto">
                  <div class="organigrama">
                    <ul>
                      <li>
                        <a href="#">Cobranza telefonica</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>* Ejecutivos con Licenciatura</p>
                              <p>* 3 años de experiencia</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <ul>
                      <li>
                        <a href="#">Estrategia</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>* Historial de estrategias</p>
                              <p>* Elaboracion de catalogo</p>
                              <p>de estrategia por servicio</p>
                              <p>* Analisis por estrategia de catalogo</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <ul>
                      <li>
                        <a href="#">Analisis y clasificacion</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>* Detectar clientes potenciales</p>
                              <p>para visitar</p>
                              <p>* Clasificacion de cartera</p>
                              <p>* Reportes estrategicos</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </div>
                <div class="col-lg-12 ml-auto">
                  <div class="organigrama">

                    <ul>
                      <li>
                        <a href="#">Documentacion y formatos</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>* Elaboracion de formatos</p>
                              <p>que se adecuen a las</p>
                              <p>necesidades del servicio</p>
                              <p>Formatos que cumplan</p>
                              <p>lineamientos</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <ul>
                      <li>
                        <a href="#">Localizacion de clientes</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>* Internet</p>
                              <p>* Libros de paginas</p>
                              <p>* Telmex red</p>
                              <p>* Investigacion en</p>
                              <p>calle</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <ul>
                      <li> <a href="#">Visita domiciliaria</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>Ruta</p>
                              <p>* Clientes potenciales y eficiencia en campo</p>
                              <p>* Punto a y finaliza en z</p>
                              <p>* Punto z y finaliza en a</p>
                              <p>* 2 anteriores horarios variables</p>
                              <p>* Por colonia</p>
                              <p>* Por cuadrante</p>
                              <p>* Por saldos</p>
                              <p>* Rutas laborales</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <ul>
                      <li> <a href="#">Masivos y cartas</a>
                        <ul>
                          <li>
                            <a href="#">
                              <p>Medios:</p>
                              <p>* Whatsapp</p>
                              <p>* Facebook</p>
                              <p>* Correo electronico</p>
                              <p>* Mensajes de texto</p>
                              <p>* Carta domiciliaria</p>
                              <p>* Grabaciones telefonicas</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </div>
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
                  <form name="sentMessage" id="contactForm" method="POST" novalidate="novalidate">
                     {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Name</label>
                        <input class="form-control" name="nombre" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Email Address</label>
                        <input class="form-control" name="correo" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Phone Number</label>
                        <input class="form-control" name="telefono" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Message</label>
                        <textarea class="form-control" name="mensaje" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                      </div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
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

          @if(isset($Servicios))

          @foreach($Servicios as $servicio)
          <!-- Portfolio Modal 1 -->
          <div class="portfolio-modal mfp-hide" id="portfolio-modal-{{$servicio->id}}">
            <div class="portfolio-modal-dialog bg-white">
              <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
              </a>
              <div class="container text-center">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">{{$servicio->titulo}}</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="{{$servicio->imagen}}" alt="">
                    <p class="mb-8">{!!$servicio->descripcion!!}</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                      <i class="fa fa-close"></i>
                      Close Project</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          @endif

          @section('scripts')
          @parent
          <!-- colocar la animacion de la informacion de los contactos -->

          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLQwkZF3EFZTOBqjHkCpO_J2HZ3be6y6s"></script>
          <script src="/vendor-plantill/jquery/jquery.min.js"></script>
          <script src="/js/index/Contacto.js"></script>
          <script src="/js/index/Mapa.js"></script>
          <script src="/js/index/app.js"></script>
          @stop

@stop
