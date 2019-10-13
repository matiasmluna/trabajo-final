<?php

require_once 'funciones/funciones.php';

require_once 'header.php';

require_once 'navbar.php';

 ?>





<!DOCTYPE html>
<html lang="en" >

<body>

  <!-- ========================= MAIN ========================= -->

  <div class="container mt-5" class="nl-blurred" align="center">
    <h1>Formulario de contacto</h1>
    <p>Rellenalo con tu información y te contactaremos</p>
  <div class="main clearfix">
    <form id="nl-form" class="nl-form">
      Hola<img src="https://media.tenor.com/images/3b388fe03da271d2674faf85eb7c3fcd/tenor.gif" width="50px">, me llamo <input type="text" value="" placeholder="Nombre y apellido" data-subline="Ejemplo: <em>Escribi tu nombre y tu apellido</em>"/>
      <br> y mi correo es
      <input type="text" value="" placeholder="@email.com" data-subline="Ejemplo: <em>Tu correo electronico</em>"/>
      <br />quiero
      <select>
        <option value="1" selected>más información</option>
         <option value="1">hacer una sugerencia</option>
         <option value="2">escribir un reclamo</option>
         <option value="3">hacer una pregunta</option>
      </select> <img src="https://media1.tenor.com/images/53eff16b2f8cbe2e774e2189baf54547/tenor.gif?itemid=14917503" width="50px"> acerca de
      <!-- acerca de  /* <input type="text" value="" placeholder="mi mensaje" data-subline="Escribi tu mensaje acá"/> */ -->
      <div class="nl-submit-wrap">

      <textarea name="text" id="text" cols="30" rows="3" placeholder="mi mensaje"></textarea>
      <br>
        <button class="nl-submit" type="submit">Enviar</button>
      </div>
      <div class="nl-overlay"></div>
    </form>
  </div>
</div>

    <!-- ========================= LINKS ========================= -->
    <section class="section-links bg padding-y-lg">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
    <header class="section-heading heading-line">
      <h4 class="title-section bg text-uppercase">PALABRAS MÁS BUSCADAS</h4>
    </header>

    <ul class="list-icon row">
      <li class="col-md-3"><a href="#"><span>Botines Nike</span></a></li>
      <li class="col-md-3"><a href="#"><span>Botines Adidas</span></a></li>
      <li class="col-md-3"><a href="#"><span>Botines de Futbol</span></a></li>
      <li class="col-md-3"><a href="#"><span>Nike Argentina</span></a></li>
      <li class="col-md-3"><a href="#"><span>Fila</span></a></li>
      <li class="col-md-3"><a href="#"><span>Mochilas</span></a></li>
      <li class="col-md-3"><a href="#"><span>Botines</span></a></li>
      <li class="col-md-3"><a href="#"><span>Adidas Argentina</span></a></li>
      <li class="col-md-3"><a href="#"><span>Balones de Futbol</span></a></li>
      <li class="col-md-3"><a href="#"><span>Puma Argentina</span></a></li>
      <li class="col-md-3"><a href="#"><span>Zapatos</span></a></li>
      <li class="col-md-3"><a href="#"><span>Remeras</span></a></li>

    </ul>
        </div> <!-- col // -->
      </div>
    </div><!-- container // -->
    </section>
    <!-- ========================= LINKS END.// ========================= -->

    <!-- ========================= SUSCRIBETE ========================= -->
    <section class="section-subscribe bg-secondary padding-y-lg">
    <div class="container">

    <p class="pb-2 text-center white">Suscríbete para obtener ofertas</p>

    <div class="row justify-content-md-center">
      <div class="col-lg-4 col-sm-6">
    <form class="row-sm form-noborder">
        <div class="col-8">
        <input class="form-control" placeholder="Tu email" type="email">
        </div> <!-- col.// -->
        <div class="col-4">
        <button type="submit" class="btn btn-block btn-dark suscribeteBoton"> <i class="fa fa-envelope"></i> Suscribirse </button>
        </div> <!-- col.// -->
    </form>
    <small class="form-text text-white-50">Nunca compartiremos su dirección de correo electrónico con un tercero. </small>
      </div> <!-- col-md-6.// -->
    </div>


    </div> <!-- container // -->
    </section>
    <!-- ========================= SUSCRIBETE END.//========================= -->

<?php  require_once 'navbar.php'; ?>

<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
<script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
<script  src="./script.js"></script>
<script src="js/nlform.js"></script>
<script>
  var nlform = new NLForm( document.getElementById( 'nl-form' ) );
</script>



</body>
</html>
