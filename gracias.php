<?php

require_once 'funciones/funciones.php';

require_once 'header.php';

require_once 'navbar.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
 body {font-family: Arial, Helvetica, sans-serif;}
 * {box-sizing: border-box;}

 input[type=text], select, textarea {
   width: 100%;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   margin-top: 6px;
   margin-bottom: 16px;
   resize: vertical;
 }

 input[type=submit] {
   background-color: #4CAF50;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
 }

 input[type=submit]:hover {
   background-color: #45a049;
 }

 .containerform {
   border-radius: 5px;
   background-color: #f2f2f2;
   padding: 20px;
 }
 </style>
 </head>
 <body>

<div class="container mt-5 mb-5">
  <h3>Gracias por contactarnos</h3>
  <h4>Pronto nos comunicaremos contigo</h4>

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

<?php  require_once 'footer.php'; ?>

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
