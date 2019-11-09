<?php
  require_once 'funciones/funciones.php';

?>

<header class="section-header">

  <main>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <!-- <a class="navbar-brand" href="#">
            <img class="logo" src="images/logos/logo DG-01.png" alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme">
          </a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav mr-auto">
              <!-- <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    Marcas principales
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Nike </a></li>
                    <li><a class="dropdown-item" href="#">Adidas </a></li>
                    <li><a class="dropdown-item" href="#">Puma  </a></li>
                  </ul>
              </li> -->
              <li><a href="index.php" class="nav-link " >   Inicio </a></li>
              <li><a href="registro.php" class="nav-link " >   Registrate gratis </a></li>
              <!-- <li><a href="#" class="nav-link " >   Tiendas oficiales </a></li> -->
              <li><a href="preguntas_frecuentes.php" class="nav-link " >   F.A.Q. </a></li>
            </ul>

            <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
      				<!-- Preguntamos si NO está logueado el usuario para mostrar los enlaces Register y Login -->
      				<?php if ( !isLogged() ) : ?>
      					<!-- <li class="nav-item"><a class="nav-link" href="registro.php">Registrate</a></li> -->
      					<li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesión</a></li>
      				<?php else: ?>
      					<li class="nav-item dropdown">
      						<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      							<img src="data/avatars/<?= $_SESSION['userLoged']['avatar']; ?>" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">
      							<?= $_SESSION['userLoged']['name'] ?>
      						</a>
      						<div class="dropdown-menu" aria-labelledby="dropNavBar">
      							<a class="dropdown-item" href="perfildelusuario.php">Mi perfil</a>
      							<a class="dropdown-item" href="logout.php">Salir</a>
      						</div>
      					</li>
      				<?php endif ?>
			      </ul>
      </div>
    </nav>
   </main>

  <section class="header-main shadow-sm">
      <div class="container">
        <div class="row-sm align-items-center">
          <div class="col-lg-4-24 col-sm-3">
            <div class="category-wrap dropdown py-1">
              <button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-bars"></i> Categorias</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Hombres </a>
                <a class="dropdown-item" href="#">Mujeres</a>
                <a class="dropdown-item" href="#">Niños</a>
                <a class="dropdown-item" href="#">Marcas </a>
                <a class="dropdown-item" href="#">Zapatillas </a>
                <a class="dropdown-item" href="#">Ofertas</a>
              </div>
            </div>
          </div>
          <div class="col-lg-11-24 col-sm-8">
            <form action="#" class="py-1">
              <div class="input-group w-100">
                <input type="text" class="form-control" style="width:50%;" placeholder="Buscar...">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">
                      <i class="fa fa-search"></i> Buscar
                    </button>
                </div>
              </div>
            </form> <!-- busqueda .end// -->
          </div> <!-- col.// -->
          <div class="col-lg-9-24 col-sm-12">
            <div class="widgets-wrap float-right row no-gutters py-1">
              <div class="col-auto">
                  <div class="widget-header dropdown">
                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                      <div class="icontext">
                        <div class="icon-wrap">
                          <i class="text-dark icon-sm fa fa-user"></i>
                        </div>
                        <div class="text-wrap text-dark">
                          <a href="login.php">Iniciar sesión</a>
                          <br>
                          <!-- Mi Cuenta <i class="fa fa-caret-down"></i> -->
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu">
                    <form class="px-4 py-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="email@tucorreo.com">
                      </div>
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña">
                      </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                      </form>
                      <hr class="dropdown-divider">
                      <a class="dropdown-item" href="#">¿Tienes una cuenta? Inicia sesión</a>
                      <a class="dropdown-item" href="#">Se me olvido la contraseña</a>
                    </div> <!--  menu .// -->
                  </div>  <!-- widget-header .// -->
                </div> <!-- col.// -->
              <div class="col-auto hideonmobile hidetable">
                <a href="carrito.php" class="widget-header">
                  <div class="icontext">
                    <div class="icon-wrap"><i class="text-dark icon-sm fa fa-shopping-cart"></i></div>
                    <div class="text-wrap text-dark">
                        Protección <br>
                        De Compra
                    </div>
                  </div>
                </a>
              </div> <!-- col.// -->
              <div class="col-auto">
                <a href="#" class="widget-header">
                  <div class="icontext">
                    <div class="icon-wrap"><i class="text-dark icon-sm  fa fa-heart"></i>
                    </div>
                    <div class="text-wrap text-dark">
                      <span class="small round badge badge-secondary">0</span>
                      <div>Favoritos</div>
                    </div>
                  </div>
                </a>
              </div> <!-- col.// -->
            </div> <!-- widgets-wrap.// row.// -->
          </div> <!-- col.// -->
        </div> <!-- row.// -->
      </div> <!-- container.// -->

    </section> <!-- fin del header .// -->

</header> <!-- section-header.// -->
