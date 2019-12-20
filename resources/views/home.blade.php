
@extends('layout')
@section('title')
  Sport DeeDee - Sport Shoes
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
            <img src="images/slider3.jpg" class="d-block w-100 h-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="images/slider1.jpg" class="d-block w-100 h-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="images/slider2.jpg" class="d-block w-100 h-25" alt="...">

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

      <div class="titulo1">
        <p>¿Quienes somos?</p>
      </div>

  <div class="quienes">
      <div class="contact-info1">
            <div class="card1">
              <i class="card-icon1 fas fa-users"></i>
              <p>Ayudamos a nuestros usuarios a expandir su potencial deportivo</p>
            </div>

            <div class="card1">
              <i class="card-icon1 fas fa-industry"></i>
              <p>Productos originales</p>
            </div>

            <div class="card1">
              <i class="card-icon1 fas fa-truck"></i>
              <p>Envíos a todo el país</p>
            </div>

          </div>

  </div>


  <div class="espaciador">

  </div>

<div class="titulo1">
    <p>¿Como contactarnos?</p>
</div>

  <div class="contacto">
          <div class="contact-info1 mb-5">
            <div class="card1">
              <i class="card-icon1 far fa-envelope"></i>
              <p>deedee@sports.com</p>
            </div>

            <div class="card1">
              <i class="card-icon1 fab fa-whatsapp"></i>
              <p>+54 9 11 5472839</p>
            </div>

            <div class="card1">
              <i class="card-icon1 fas fa-map-marker-alt"></i>
              <p>Nordelta, Buenos Aires</p>
            </div>

          </div>

  </div>
  <div class="espaciador">

  </div>
@endsection
