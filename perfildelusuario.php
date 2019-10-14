<?php

require_once 'funciones/funciones.php';

// Si no está logueda la persona la redirijo al login
if ( !isLogged() ) {
  header('location: login.php');
  exit;
}

$pageTitle = 'Profile';

require_once 'header.php';

$theUser = $_SESSION['userLoged'];



require_once 'navbar.php';

 ?>

<!doctype html>
<html lang="en">

  <body>


    <div class="container">
        <div class="row">
          <div class="col-md-8">
            <br>
            <h2 style="font-size: 40px">Hola <?= $theUser['name']; ?></h2>
            <img src="data/avatars/<?= $theUser['avatar']; ?>" alt="imagen usuario">
            <br><br>
            <a href="#" class="btn btn-info"><?= $theUser['email']; ?></a>
          </div>
        </div>
    </div>


    <!-- <div class="container" style="margin: 5px">
            <div class="container" style="margin: 15px;">
              <br>
              <h2 style="font-size: 36px" class="text-center">MI CUENTA</h1>
            </div>
            <br>
            <div class="row">
              <div class="container col-5">
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
          </div>
    </div> -->

    <br>

  <?php require_once 'footer.php'; ?>
  </body>
</html>
