@extends('layout')

@section('title', 'Página principal')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="css/pages/index.css">
@endsection

@section('content')
  
  <header class="masthead d-flex">

    <div class="container-fluid text-center my-auto">
      <h1 class="mb-1" id="principal-text" >EEST N°3</h1>
      <h3 class="mb-5" style="color:black;" id="fadeIntoView">
        <em>Domingo Faustino Sarmiento</em>
      </h3>
      <div class="overlap-image bottom">
        <div class="theme--choco">
          <p id="splash--scroller">
            <a class="plain" href="#noticias">
              Noticias
            </a>
          </p>
        </div>
      </div>
    </div>
  </header>
  <!--- Header --->

  <!-- Start of div noticias -->
  <div class="container-fluid ">
    <div class="container" id="noticias">
    <h2 class="section-separator text-center">Noticias</h2>
      <div class="row">
        @foreach($noticias as $noticia)
          <div class="col-xl-3 col-md-6 card-separator">
            <div class="zoom-overlay">
              <a href="{{ route('products.show',$noticia->id) }}"><img class="card-img-top image-holder" src="{{asset('image/'.$noticia->image)}}" alt=""></a>
            </div>
            <div class="">
                <h4 class="title-card"><a href="{{ route('products.show',$noticia->id) }}">{{ $noticia->name }}</a></h4>
                <p class="card-text">{{ $noticia->detail }}</p>
                <p class="card-text">{{ $noticia->created_at }}</p>

                <div class="link-attached">
                  <a id="a" href="{{ route('products.show',$noticia->id) }}">Ver artículo <i id="b" class="fa fa-angle-right arrow-icon"></i></a>
                </div>
            </div>
          </div>
          @endforeach
        <div class="col-12 text-center separator">
          <button class="btn btn-lg btn-outline-dark" type="button" name="button">Ver más noticias</button>
        </div>   
      </div>
    </div>
  </div> 
                    <!-- End of Noticias Section -->

                <!-- Start of especialidades section -->
  <section class="bg-lightgray mb-0 text-center" id="especialidades">

    <div class="container">
        <h1>Especialidades</h1><br>
    <h3>Disponemos de seis especialidades donde el alumno se podrá formar.</h3><br>
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-6 col-sm-12 col-lg-2">
                <a class="underlined-animation" href="#">Construcciones</a>
              </div>     

              <div class="col-xs-6 col-sm-12 col-lg-2">
                <a class="underlined-animation" href="#">Electrónica</a>
              </div>

              <div class="col-xs-6 col-sm-12 col-lg-2">
                  <a class="underlined-animation" href="#">Informática</a>
              </div>

              <div class="col-xs-6 col-sm-12 col-lg-2">
                  <a class="underlined-animation" href="#">Electromecánica</a>
              </div>

              <div class="col-xs-6 col-sm-12 col-lg-2">
                  <a class="underlined-animation" href="#">Química</a>
              </div>

              <div class="col-xs-6 col-sm-12 col-lg-2">
                  <a class="underlined-animation" href="#">Automotores</a>
              </div>
          </div>
      </div>
      <div class="separator">
          <a href="especialidades"><button class="btn btn-lg btn-outline-dark" type="button" name="button">Más información</button></a>
      </div>
    </div>
  </section>
                <!-- End of especialidades section -->

                <!-- Start of noticias rapidas -->

      <section class="bg-darkgreen">
        <div class="fixed-modal">
          Mesas de examen
          <button style="border-radius: 10px;width:100%;" type="button" class="btn btn-info" data-toggle="modal" data-target="#mesa-de-examen">
              Ver más
          </button>
        </div>
 
        <div class="container text-center">
          <div class="container-fluid">
            <h3 class="text-white">Noticias rápidas</h3><br>
            
            <div class="slider" data-items="1,3,5,6" data-slide="1" id="slider"  data-interval="1000">
  
              <div class="slides">
                <div class="item card-bg-white card-shadow">
                    <p>Hoy no se dictarán clases en la técnica 3.</p>
                    <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                    <span class="text-blue">Rigoberta gutierrez</span>
                    <p>19/5/19 20:58</p>
                </div>
                <div class="item card-bg-white card-shadow">
                    <p>Mañana vendrá el intendente a la escuela.</p>
                    <img class="logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                    <span class="text-blue">Rigoberta gutierrez</span>
                    <p>18/5/19 18:20</p>
                  </div>
                  <div class="item card-bg-white card-shadow">
                      <p>Se comenzará a vender los buzos de la escuela un 50% más barato por consecuencia de la cantidad de contribuyentes a cooperadora. Se estima que para la semana que viene ya los buzos tendrán dicho precio.</p>
                      <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                      <span class="text-blue">Rigoberta gutierrez</span>
                      <p>18/5/19 15:41</p>
                  </div>
                  <div class="item card-bg-white card-shadow">
                      <p>Hoy no se dictarán clases en la técnica 3.</p>
                      <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                      <span class="text-blue">Rigoberta gutierrez</span>
                      <p>17/5/19 20:58</p>
                  </div>
                <div class="item card-bg-white card-shadow">
                    <p>Debido a las fuertes tempestades originadas el día de ayer, la escuela permanecerá cerrada hasta nuevo aviso.</p>
                    <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                    <span class="text-blue">Rigoberta gutierrez</span>
                    <p>17/5/19 20:58</p>              
                </div>
                  <button class="btn btn-lg btn-light left-arrow">&#10094;</button>
                  <button class="btn btn-lg btn-light right-arrow">&#10095;</button>
              </div>
            </div>
            <div class="separator"></div>
          </div>
        </div>
      </section>
                <!-- End of noticias rapidas -->

                <!-- Start of Acerca de section -->
      <div class="container-fluid bg-blue">
        <div class="container text-center text-white">
          <h3 class="section-separator">Acerca de nuestra escuela</h3>
          <p>Un lugar para aprender, descubrir, innovar, expresarte y debatir</p>
          <div class="row">
            <div class="col-xl-4">
              <h5>Abierto en <b>1936</b></h5>
            </div>
            <div class="col-xl-4">
              <h5>Estudiantes <b>1.782</b></h5>
            </div>
            <div class="col-xl-4">
              <h5>Especialidades <b>6</b></h5>
            </div>
          </div>
          <div class="separator">
            <a href="acercade"><button class="btn btn-lg btn-outline-light" type="button" name="button">Más información</button></a>
          </div>
        </div>
      </div>
              <!-- End of Acerca de section -->

              <!--  Start of visitanos -->

      <div class="container-fluid">
         <div class="row">
           <div class="col-md-6 col-sm-12 nopadding">

            <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/escuela-carousel.jpg" alt="Los Angeles">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>La escuela más grande de Mar Del Plata</h4>
                    <p>Construyendo futuros técnicos</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/macri-dios.jpg" alt="Chicago">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>Con mucha pasión por enseñar</h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/visitanos.png" alt="New York">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>¡Visitanos!</h4>
                  </div>
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="javascript:void();" data-target="#demo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="javascript:void();" data-target="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 nopadding">
             <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.8519850853354!2d-57.566319291805!3d-38.00075829831354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584deae122e7697%3A0x9e8d9fc9509d9056!2sEscuela+de+Educaci%C3%B3n+Secundaria+T%C3%A9cnica+N.3+Domingo+Faustino+Sarmiento!5e0!3m2!1sen!2sar!4v1559433368397!5m2!1sen!2sar" width="800" height="600" frameborder="0" style="border:0"></iframe>
            </div>            
          </div>
        </div>
      </div>

        <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
@endsection

@section('extra-js')
    <script src="js/main.js"></script>
@endsection


