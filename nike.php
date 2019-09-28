<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Producto Nike</title>
  <link rel="shortcut icon" type="image/x-icon" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <link rel="stylesheet" type="text/css" href="css/component.css" />

  <!-- javascript -->
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/modernizr.custom.js"></script>

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

  <!-- ========================= MAIN ========================= -->

<div class="card">
    <div class="row">
      <div class="col-sm-6 border-right">
  <article class="gallery-wrap">
      <div class="row">
        <div class="col-sm-6">
          <div class="img-big-wrap">
            <div> <a href="images/product2.jpg" data-fancybox=""><img src="images/product2.jpg"></a></div>
          </div> <!-- slider-product.// -->
         </div>
        <div class="col-sm-6">
          <div class="img-big-wrap">
            <div> <video height="450px" autoplay="" loop="" playsinline="" muted=""><source src="https://c.static-nike.com/a/videos/q_90,vc_vp9/mdofi5pjtpn6kus4e2tz/video.webm" type="video/webm; codecs=vp9"></video></div></button></a></div>
        </div>
        <div class="col-sm-6">
            <div class="img-big-wrap">
              <div> <a href="images/product1.jpg" data-fancybox=""><img src="images/product1.jpg"></a></div>
            </div> <!-- slider-product.// -->
           </div>
           <div class="col-sm-6">
              <div class="img-big-wrap">
                <div> <a href="images/product3.jpg" data-fancybox=""><img src="images/product3.jpg"></a></div>
              </div> <!-- slider-product.// -->
             </div> <!-- slider-product.// -->
    </div>
  </div>
  </article> <!-- gallery-wrap .end// -->

  <div class="col-sm-6">
  <article class="p-5">
    <h3 class="title mb-3">NIKE MERCURIAL VAPOR 13 ELITE FG</h3>

  <div class="mb-3">
    <var class="price h3 text-warning">
      <span class="currency"> $</span><span class="num">5,490.00</span>
    </var>

  </div> <!-- price-detail-wrap .// -->
  <dl>
    <dt>Descripción</dt>
    <dd><p>Las Nike Phantom Venom Elite FG se han diseñado para que chutes con total precisión y potencia para ganar todos los partidos. Las cintas del empeine te permiten chutar con efecto mientras mantienes un control absoluto, al tiempo que los cables Flywire y la placa flexible proporcionan estabilidad y tracción para darlo todo en cualquier momento. </p></dd>
  </dl>
  <dl class="row">
    <dt class="col-sm-3">Modelo</dt>
    <dd class="col-sm-9">12345611</dd>

    <dt class="col-sm-3">Colores</dt>
    <dd class="col-sm-9">Negro </dd>

    <dt class="col-sm-3">Envío</dt>
    <dd class="col-sm-9">Gratis </dd>
  </dl>
  <div class="rating-wrap">

    <ul class="rating-stars">
      <li style="width:80%" class="stars-active">
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </li>
      <li>
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </li>
    </ul>
    <div class="label-rating">42 opiniones</div>
    <div class="label-rating">154 compras </div>
  </div> <!-- rating-wrap.// -->
  <hr>
    <div class="row">
      <div class="col-sm-5">
        <dl class="dlist-inline">
          <dt>Cantidad: </dt>
          <dd>
            <select class="form-control form-control-sm" style="width:70px;">
              <option> 1 </option>
              <option> 2 </option>
              <option> 3 </option>
            </select>
          </dd>
        </dl>  <!-- item-property .// -->
      </div> <!-- col.// -->
      <div class="col-sm-7">
        <dl class="dlist-inline">
            <dt>Talle </dt>
            <dd>
              <label>
                <span class="btn btn-outline-dark"> EUR 40</span>
              </label>
              <label>
                <span class="btn btn-outline-dark"> EUR 41</span>
              </label>
              <label>
                <span class="btn btn-outline-dark"> EUR 42</span>
              </label>
              <label>
                <span class="btn btn-outline-dark"> EUR 43</span>
              </label>
              <label>
                <span class="btn btn-outline-dark"> EUR 44</span>
              </label>

            </dd>
        </dl>  <!-- item-property .// -->
      </div> <!-- col.// -->
    </div> <!-- row.// -->
    <hr>
    <a href="#" class="btn  btn-dark"> Comprar ahora </a>
    <a href="#" class="btn  btn-outline-dark"> <i class="fas fa-shopping-cart"></i> Añadir al carrito </a>
  </article> <!-- card-body.// -->
      </div> <!-- col.// -->
    </div> <!-- row.// -->
  </div> <!-- card.// -->


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

<!-- ========================= FOOTER ========================= -->
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
<!-- ========================= FOOTER END // ========================= -->


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
