<?php

require_once 'funciones/funciones.php';

require_once 'header.php';

require_once 'navbar.php';

 ?>

<!doctype html>
<html lang="en">

  <body>

    <div class="container" style="margin: 5px">
            <div class="container" style="margin: 15px;">
              <br>
              <h2 style="font-size: 36px" class="text-center">MI CUENTA</h1>
                <!-- <button type="button" class="btn btn-warning">
                  <a style="color: white;" href="index.php" class="aling-center">Volver al Inicio</a>
                </button> -->
            </div>
            <br>
            <div class="row">
              <div class="container col-5">
                  <!--left col-->
                  <ul class="list-group">
                      <li class="list-group-item text-center" contenteditable="false">Perfil</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Nombre: </strong></span> Joaquin Buenaobra</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Dirección: </strong></span> Av. Rivadavia 1809</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Email: </strong></span>jbuenaobra@hotmail.com</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Fecha de nacimiento: </strong></span>03/05/1981</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Edad: </strong></span>37 años</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Sexo: </strong></span>Masculino</li>
                      <li class="list-group-item text-center" contenteditable="false">Detalle de contacto</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Teléfono: </strong></span>5514-1132</li>
                      <li class="list-group-item text-center"><span class="pull-left"><strong class="">Celular: </strong></span>15-3092-4245</li>

                  </ul>
              </div>
              <!--/col-3-->
          </div>
    </div>
    <br>

  <?php require_once 'footer.php'; ?>
  </body>
</html>
