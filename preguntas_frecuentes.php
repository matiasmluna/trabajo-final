<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda de Fútbol - Aprovecha las ofertas</title>
    <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" type="image/x-icon" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- jQuery -->
  <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

  <!-- Bootstrap4-->
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

  <!-- Font awesome 5 -->
  <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

  <!-- plugin: owl carousel  -->
  <link href="plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="plugins/owlcarousel/owl.carousel.min.js"></script>

  <!-- css -->
  <link href="css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
  <link href="css/style.css" rel="stylesheet"/>
  <link href="css/glass-adidas.css" rel="stylesheet"/>
  <link href="css/flick.css" rel="stylesheet"/>

  <!-- javascript -->
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/flick.js" type="text/javascript"></script>
  <script type="text/javascript">
  // jquery ready start
  $(document).ready(function() {
    // jQuery code
  });
  // jquery end
  </script>

</head>

<body>

  <header class="section-header">

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img class="logo" src="images/logos/logo.png" alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTop">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                      Marcas principales
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Nike </a></li>
                      <li><a class="dropdown-item" href="#">Adidas </a></li>
                      <li><a class="dropdown-item" href="#">Puma  </a></li>
                    </ul>
                </li>
                <li><a href="index.php" class="nav-link " >   Inicio </a></li>
                <li><a href="registro.php" class="nav-link " >   Registrate gratis </a></li>
                <!-- <li><a href="#" class="nav-link " >   Tiendas oficiales </a></li> -->
                <li><a href="preguntas_frecuentes.php" class="nav-link " >   Preguntas frecuentes </a></li>
              </ul>
              <ul class="navbar-nav">
                <!-- <li class="nav-item"><a href="#" class="nav-link" > Android </a></li>
                <img src="https://candymanvendingservice.com/wp-content/uploads/2016/11/icons-apple-android.png" width="50px" height="25px">
                <li class="nav-item"><a href="http://bootstrap-ecommerce.com/" class="nav-link" > iOS  </a></li> -->
                <li class="nav-item"><a href="perfildelusuario.php" class="nav-link" > Mi cuenta </a></li>
              </ul> <!-- barra de navegacion.// -->
            </div> <!-- collapse.// -->
        </div>
      </nav>

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
                <div class="col-auto hideonmobile">
                  <a href="#" class="widget-header">
                    <div class="icontext">
                      <div class="icon-wrap"><i class="text-dark icon-sm fa fa-shopping-cart"></i></div>
                      <div class="text-wrap text-dark">
                        Protección <br> De Compra
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

  <section style="padding: 4px;margin: 10px;margin-left: 14px ">
      <br>
      <h1 style="font-size: 36px">Preguntas frecuentes</h1>
        <br>
        <h2 class="text-body mb-0" style="font-size: 18px">¿Cuál es el horario de Atención al Cliente?</h2>
          <p style="font-size: 14px">Nuestro Centro de Atención al cliente funciona de lunes a sábados de 9:00hs a 17:00hs.</p>
          <br>
        <h2 class="text-body mb-0" style="font-size: 18px">¿Cuál es el plazo de entrega de mi pedido?</h2>
          <p style="font-size: 14px">El plazo de entrega es de 1 a 2 días para la zona de CABA y entre 2 a 3 días en el Gran Buenos Aires.</p>
          <br>
        <h2 class="text-body mb-0" style="font-size: 18px">Si no hay nadie para recibir el pedido, ¿qué sucede?</h2>
          <p style="font-size: 14px">Serán realizados 2 intentos de entrega. Después de los 2 intentos, si la entrega continua sin ser efectiva, el pedido permanecerá en la sucursal del correo encargado del envío durante 5 días hábiles para su retiro. Pasado este plazo el pedido retornará a nuestro centro de distribución. </p>
          <br>
        <h2 class="text-body mb-0" style="font-size: 18px">Tengo otro tipo de consulta,¿qué hago?</h2>
          <p style="font-size: 14px">Deberá contactarse con sac@sportlife.com.ar</p>
        <h2 class="text-body mb-0" style="font-size: 18px"></h2>
    </section>

  <footer class="section-footer bg-secondary">
        <div class="container">
          <section class="footer-top padding-top">
            <div class="row">
              <aside class="col-sm-3 col-md-3 white marginMobile">
                <h5 class="title">Institucional</h5>
                <ul class="list-unstyled">
                  <li> <a href="#">¿Quiénes somos?</a></li>
                  <li> <a href="#">Investor Relations</a></li>
                  <li> <a href="#">Términos y condiciones</a></li>
                  <li> <a href="#">Eventos</a></li>
                </ul>
              </aside>
              <aside class="col-sm-3  col-md-3 white marginMobile">
                <h5 class="title">Ayuda</h5>
                <ul class="list-unstyled">
                  <li> <a href="#"> Entregas </a></li>
                  <li> <a href="#"> Pagos </a></li>
                  <li> <a href="#"> Cambios </a></li>
                  <li> <a href="#"> Mi Pedidos </a></li>
                </ul>
              </aside>
              <aside class="col-sm-3  col-md-3 white marginMobile">
                <h5 class="title">Políticas</h5>
                <ul class="list-unstyled">
                  <li> <a href="#"> Política de Privacidad </a></li>
                  <li> <a href="#"> Política de Envio Gratis </a></li>

                </ul>
              </aside>
              <aside class="col-sm-3">
                <article class="white marginMobile">
                  <h5 class="title">Centro de Atención a Clientes</h5>
                  <p>
                    <strong>Teléfono: </strong> + 54 (11) 50328143 <br>
                      <strong>Interior:</strong> 0810-444-6387
                  </p>

                   <div class="btn-group white">
                      <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                      <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                      <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                  </div>
                </article>
              </aside>
            </div> <!-- row.// -->
            <br>
          </section>
          <section class="footer-bottom row border-top-white">
            <div class="col-sm-4">
              <p class="text-white-50"> Hecho con <3 <br>  en Nordelta.</p>
            </div>
            <div class="col-sm-4 payments-and-seals-content table">
                <ul class="payment-flag-list">
                  <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/visa.svg" title="Visa" alt="Visa"></li>
                  <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/mastercard.svg" title="Mastercard" alt="Mastercard"></li>
                  <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/amex.svg" title="American Express" alt="American Express"></li>
                  <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/naranja.svg" title="Naranja" alt="Naranja"></li><li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/visadebito.svg" title="Visa" alt="Visa"></li>
                  <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/pagofacil.svg" title="Pago Fácil" alt="Pago Fácil"></li>
                  <li><a href="http://www.ahora12.gob.ar/index.php" target="_blank" class="footer-stamp-AhoraPago"><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/images/stamp-AhoraPago.svg" title="AHORA 3y6" alt="AHORA 3y6"></a></li>
                </ul></div>

            <div class="col-sm-4">
              <p class="text-md-right text-white-50">
        Copyright &copy  <br>
      <a href="#" class="text-white-50">Grupo 4.</a>
              </p>
            </div>
          </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  <script  src="js/scriptSC.js"></script>
</body>

</html>
