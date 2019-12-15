
@extends('layout')
@section('title')
  Didi Tienda Deportiva
@endsection

@section('main')


      <script scr"bootstrap-grid.min.css" type="text/javascript"></script>
      <script scr"bootstrap-reboot.min.css" type="text/javascript"></script>
      <script scr"bootstrap.min.css" type="text/javascript"></script>
      <script scr"style.css" type="text/javascript"></script>
      <script scr"style.min.css" type="text/javascript"></script>
      <script scr"homestyle.css" type="text/javascript"></script>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <div class="espaciador">

      </div>

  <div class="quienes">
  <h1>¿Quienes somos?</h1>

      <div class="contact-info">
            <div class="card">
              <i class="card-icon fas fa-users"></i>
              <p>Ayudamos a nuestros usuarios a expandir su potencial deportivo</p>
            </div>

            <div class="card">
              <i class="card-icon fas fa-industry"></i>
              <p>Productos originales</p>
            </div>

            <div class="card">
              <i class="card-icon fas fa-truck"></i>
              <p>Envíos a todo el país</p>
            </div>

          </div>

  </div>


  <div class="espaciador">

  </div>

  <div class="contacto">
  <h1>¿Como contactarnos?</h1>
          <div class="contact-info">
            <div class="card">
              <i class="card-icon far fa-envelope"></i>
              <p>deedee@sports.com</p>
            </div>

            <div class="card">
              <i class="card-icon fab fa-whatsapp"></i>
              <p>+54 9 11 5472839</p>
            </div>

            <div class="card">
              <i class="card-icon fas fa-map-marker-alt"></i>
              <p>Nordelta, Buenos Aires</p>
            </div>

          </div>

  </div>

@endsection
