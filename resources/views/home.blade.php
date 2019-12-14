
@extends(‘layout’)
@section(‘title’)
  Didi Tienda Deportiva
@endsection
@section(‘main’)

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/1e651f599a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
      <link rel="stylesheet" href="{{ asset('images/logo0.png') }}">
      <link rel="stylesheet" href="{{ asset('images/slider1.jpg') }}">
      <link rel="stylesheet" href="{{ asset('images/slider2.jpg') }}">
      <link rel="stylesheet" href="{{ asset('images/slider3.jpg') }}">
    </head>
    <body>


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



      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>
@endsection
