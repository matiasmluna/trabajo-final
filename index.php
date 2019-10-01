<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Tienda de Futbol - Aprovecha las ofertas</title>
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

  <!-- ========================= MAIN ========================= -->

  <section>
    <div>
      <div class="col-md-12">
        <!-- ================= slider ================= -->
        <div class="slide mb-3">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://c.static-nike.com/a/images/w_1920,c_limit,f_auto/z9yvrcp91sqsfhqqivnk/global-football-lp-emea.jpg" alt="nike">
            <div class="carousel-caption d-none d-md-block sliderContenido">
              <h5 class="headline">DESATA TU LADO OSCURO</h5>
              <button type="button" class="btn btn-light comprarBoton">
                <a href="nike.php">Comprar</a>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- ============== fin main slider // ============= -->



      </div> <!-- col.// -->

    </div> <!-- row.// -->

  </section>

  <!-- ========================= FIN MAIN // ========================= -->

  <!-- ========================= COMIENZO SECCION ========================= -->
  <section>
    <div class="col-xs-1 mb-5" align="center" >
    <div class="home-gamma__killers-static" id="home-gamma-killers-list">
      <a href="#" class="home-gamma__killers-static__image" data-push-ga="1"><img src="	https://static.netshoes.com.ar/bnn/l_netshoesar/2019-06-03/1665_deal1.jpg" alt="deal1_desktop"></a><a href="#" class="home-gamma__killers-static__image" data-push-ga="1">
        <img src="https://static.netshoes.com.ar/bnn/l_netshoesar/2019-06-03/5689_deal2.jpg" alt="deal2_desktop"></a>
        <a href="#" class="home-gamma__killers-static__image" data-push-ga="1">
          <img src="https://static.netshoes.com.ar/bnn/l_netshoesar/2019-06-03/7082_deal3.jpg" alt="deal3_desktop"></a>
          <a href="#" class="home-gamma__killers-static__image" data-push-ga="1">
            <img src="https://static.netshoes.com.ar/bnn/l_netshoesar/2019-09-10/1683_deal4.jpg" alt="deal4_desktop"></a>
              </div>
    </div>
  </section>

  <div class="emptyspace">

  <div class="hideonmobile hidetable container mt-25 mb-5">
    <!-- partial:index.partial.html -->
    <h4 class="gl-text-center color-theme-black___1htzw">¿QUÉ TIPO DE JUGADOR ERES?</h4>
  </div>

  <div class="hideonmobile hidetable parallax">

    <!-- background parallax layer -->
    <div class="parallax__layer parallax__layer--bg">
      <div class="parallax__layer__cell parallax__layer__cell--bg"></div>
      <div class="parallax__layer__cell parallax__layer__cell--bg"></div>
      <div class="parallax__layer__cell parallax__layer__cell--bg"></div>
      <div class="parallax__layer__cell parallax__layer__cell--bg"></div>
    </div>

    <!-- carousel: midground parallax layer -->
    <div class="carousel">
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
      <div class="carousel-cell"></div>
    </div>

    <!-- foreground parallax layer -->
    <div class="parallax__layer parallax__layer--fg">
      <div class="parallax__layer__cell parallax__layer__cell--fg">
        <img id="botin" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-item-selector-d-copa-19-0-product_tcm190-378945.png">
        <a href="#"><button type="button" class="btn btn-outline-dark botonslide">Comprar</button></a>
      </div>
      <div class="parallax__layer__cell parallax__layer__cell--fg">
              <img id="botin" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-item-selector-d-nemeziz-19-0-product_tcm190-378943.png">
              <a href="#"><button type="button" class="btn btn-outline-dark botonslide">Comprar</button></a>
      </div>
      <div class="parallax__layer__cell parallax__layer__cell--fg">
              <img id="botin" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-item-selector-d-predator-19-0-product_tcm190-378941.png">
              <a href="#"><button type="button" class="btn btn-outline-dark botonslide">Comprar</button></a>
      </div>
      <div class="parallax__layer__cell parallax__layer__cell--fg">
              <img id="botin" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-item-selector-d-x-19-0-product_tcm190-378939.png">
              <a href="#"><button type="button" class="btn btn-outline-dark botonslide">Comprar</button></a>
      </div>

    </div>

  </div>

  <!-- ========================= FIN SECCION ========================= -->


  <!-- ========================= PRODUCTOS ========================= -->
  <div class="emptyspace">
  </div>
    <!-- partial:index.partial.html -->
    <section class="padding-y-lg ">
      <div class="container">
        <h4 class="gl-text-center color-theme-black___1htzw">PRODUCTOS</h4>

    <!-- ========================= ADIDAS ========================= -->

          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
               <div class="containerCard">
                <div class="card">
                    <div class="card-head2">
                      <img src="images/adilogo.png" alt="logo" class="card-logo">
                      <img src="images/adidas1-1.png" alt="Shoe" class="product-img">
                      <div class="product-detail">
                        <h2>Botines Adidas</h2>
                        <p class="fadetext">ADIDAS</p>
                        <p class="fadetext">ADIDAS</p>
                        <p class="fadetext">ADIDAS</p>
                      </div>
                      <span class="back-text">
                              NOR
                      </span>
                    </div>
                    <div class="card-body">
                      <div class="product-desc">
                        <span class="product-title">
                          Pre<b>dator</b>
                          <span class="badge">
                            Nuevo
                          </span>
                        </span>
                        <span class="product-caption">
                          Adidas Predator 19.4 S FG
                        </span>
                        <span class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star grey"></i>
                        </span>
                      </div>
                      <div class="product-properties">
                        <span class="product-size">
                          <h4>Talle</h4>
                            <ul class="ul-size">
                              <li><a href="#">40</a></li>
                              <li><a href="#">41</a></li>
                              <li><a href="#">42</a></li>
                              <li><a href="#" class="active">43</a></li>
                              <li><a href="#">44</a></li>
                            </ul>
                        </span>
                        <span class="product-price2">
                          $<b>4,999.00</b>
                        </span>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="containerCard">
               <div class="card">
                 <div class="card-head2">
                   <img src="images/adilogo.png" alt="logo" class="card-logo">
                   <img src="images/adidas2.png" alt="Shoe" class="product-img">
                   <div class="product-detail">
                     <h2>Botines Adidas</h2>
                     <p class="fadetext">ADIDAS</p>
                     <p class="fadetext">ADIDAS</p>
                     <p class="fadetext">ADIDAS</p>
                   </div>
                    <span class="back-text">
                           DEL
                    </span>
                 </div>
                 <div class="card-body">
                   <div class="product-desc">
                     <span class="product-title">
                       Ne<b>meziz</b>
                      <span class="badge">
                        Nuevo
                      </span>
                     </span>
                     <span class="product-caption">
                       Adidas Nemeziz 19.3
                     </span>
                     <span class="product-rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star grey"></i>
                    </span>
                   </div>
                   <div class="product-properties">
                     <span class="product-size">
                       <h4>Talle</h4>
                       <ul class="ul-size">
                           <li><a href="#">40</a></li>
                           <li><a href="#" class="active">41</a></li>
                           <li><a href="#">42</a></li>
                           <li><a href="#">43</a></li>
                           <li><a href="#">44</a></li>
                        </ul>
                      </span>
                      <span class="product-price2">
                         $<b>5,999.00</b>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="containerCard">
                <div class="card">
                  <div class="card-head2">
                    <img src="images/adilogo.png" alt="logo" class="card-logo">
                    <img src="images/adi3.png" alt="Shoe" class="product-img">
                    <div class="product-detail">
                      <h2>Botines Adidas</h2>
                      <p class="fadetext">ADIDAS</p>
                      <p class="fadetext">ADIDAS</p>
                      <p class="fadetext">ADIDAS</p>
                    </div>
                    <span class="back-text">
                     TA
                    </span>
                  </div>
                  <div class="card-body">
                    <div class="product-desc">
                      <span class="product-title">
                       TAN<b>GO</b>
                       <span class="badge">
                         Nuevo
                       </span>
                     </span>
                     <span class="product-caption">
                       Adidas X Tango 18.4 S FG
                     </span>
                     <span class="product-rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star grey"></i>
                     </span>
                   </div>
                   <div class="product-properties">
                     <span class="product-size">
                       <h4>Talle</h4>
                       <ul class="ul-size">
                         <li><a href="#">40</a></li>
                         <li><a href="#">41</a></li>
                         <li><a href="#">42</a></li>
                         <li><a href="#">43</a></li>
                         <li><a href="#" class="active">44</a></li>
                       </ul>
                     </span>
                     <span class="product-price2">
                       $<b>6,999.00</b>
                     </span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
          </div>

    <!-- ========================= NIKE ========================= -->
          <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                   <div class="containerCard">
                      <div class="card">
                          <div class="card-head">
                            <img src="https://s5.postimg.cc/wy79025cz/nike_Logo_White.png" alt="logo" class="card-logo">
                            <img src="images/nike1.png" alt="Shoe" class="product-img">
                            <div class="product-detail">
                              <h2>Botines Nike</h2>
                              <p class="fadetext">NIKE</p>
                              <p class="fadetext">NIKE</p>
                              <p class="fadetext">NIKE</p>
                            </div>
                            <span class="back-text">
                                    GRU
                            </span>
                          </div>
                          <div class="card-body">
                            <div class="product-desc">
                              <span class="product-title">
                                VE<b>NOM</b>
                                <span class="badge">
                                  Tendencia
                                </span>
                              </span>
                              <span class="product-caption">
                                      Nike Phantom Venom Elite FG
                              </span>
                              <span class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </span>
                            </div>
                            <div class="product-properties">
                              <span class="product-size">
                                <h4>Talle</h4>
                                <ul class="ul-size">
                                  <li><a href="#">41</a></li>
                                  <li><a href="#">42</a></li>
                                  <li><a href="#">43</a></li>
                                  <li><a href="#" class="active">44</a></li>
                                  <li><a href="#">45</a></li>
                                </ul>
                              </span>
                              <span class="product-price">
                                $<b>7,490.00</b>
                              </span>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                  <div class="containerCard">
                   <div class="card">
                     <div class="card-head">
                        <img src="https://s5.postimg.cc/wy79025cz/nike_Logo_White.png" alt="logo" class="card-logo">
                        <img src="images/nike3.png" alt="Shoe" class="product-img">
                        <div class="product-detail">
                          <h2>Botines Nike</h2>
                          <p class="fadetext">NIKE</p><p class="fadetext">NIKE</p>
                          <p class="fadetext">NIKE</p>
                        </div>
                        <span class="back-text">
                          PO4
                        </span>
                     </div>
                     <div class="card-body">
                         <div class="product-desc">
                           <span class="product-title">
                              SUPER<b>FLY</b>
                              <span class="badge">
                                Tendencia
                              </span>
                           </span>
                           <span class="product-caption">
                             Nike Superfly 7 Elite FG
                           </span>
                           <span class="product-rating">
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                           </span>
                         </div>
                         <div class="product-properties">
                           <span class="product-size">
                             <h4>Talle</h4>
                             <ul class="ul-size">
                               <li><a href="#">41</a></li>
                               <li><a href="#">42</a></li>
                               <li><a href="#">43</a></li>
                               <li><a href="#" class="active">44</a></li>
                               <li><a href="#">45</a></li>
                              </ul>
                            </span>
                            <span class="product-price">
                              $<b>4,490.00</b>
                            </span>
                         </div>
                     </div>
                   </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                <div class="containerCard">
                 <div class="card">
                   <div class="card-head">
                       <img src="https://s5.postimg.cc/wy79025cz/nike_Logo_White.png" alt="logo" class="card-logo">
                       <img src="images/nike2.png" alt="Shoe" class="product-img">
                       <div class="product-detail">
                         <h2>Botines Nike</h2>
                         <p class="fadetext">NIKE</p>
                         <p class="fadetext">NIKE</p>
                         <p class="fadetext">NIKE</p>
                       </div>
                       <span class="back-text">
                         ´19
                        </span>
                   </div>
                   <div class="card-body">
                     <div class="product-desc">
                       <span class="product-title">
                         MER<b>CURIAL</b>
                         <span class="badge">
                           Tendencia
                         </span>
                       </span>
                       <span class="product-caption">
                         Nike Mercurial Vapor 13 Elite FG
                       </span>
                       <span class="product-rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                        </span>
                     </div>
                     <div class="product-properties">
                       <span class="product-size">
                         <h4>Talle</h4>
                         <ul class="ul-size">
                           <li><a href="#">41</a></li>
                           <li><a href="#">42</a></li>
                           <li><a href="#">43</a></li>
                           <li><a href="#" class="active">44</a></li>
                           <li><a href="#">45</a></li>
                         </ul>
                       </span>
                       <span class="product-price">
                         $<b>5,490.00</b>
                       </span>
                     </div>
                   </div>
                 </div>
                </div>
                </div>

            </div>

      </div>
  </section>
     <!-- container .//  -->

    <!-- ========================= FIN PRODUCTOS// ========================= -->


    <!-- ========================= VIDEO ========================= -->
    <section class="main___1GGDS color-theme-white___3kPfz text-justify-left___1hCwx content-vertical-align-center___1VV72 medium___QTihu">
      <div class="content___3Uzc5">
        <div class=" layer_video___wfGwY ">
          <div class="wallpaperWrapper___gIN48">
            <picture>
              <source media="(min-width: 960px)" srcset="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-video-fullwidth-t-d-combined_tcm190-374112.jpg"><source media="(min-width: 600px)" srcset="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-video-fullwidth-t-d-combined_tcm190-374112.jpg"><source srcset="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-video-fullwidth-m-combined_tcm190-374113.jpg">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/esES/Images/football-fw19-hardwired-clp-video-fullwidth-t-d-combined_tcm190-374112.jpg" loading="auto" data-di-id="di-id-f782c1d2-eca90a8d">
            </picture>
          </div>
          <div class="video-icon-wrapper undefined play-button___23YMB">
            <svg class="gl-icon play-button__icon___1kIpe" data-di-res-id="1f9298c-a04ae735" data-di-rand="1569458165910">
              <use xlink:href="#play-shadow">
              </use>
            </svg>
          </div>
          <div class="is-hidden___ewP-K">
            <div class="video_overlay___21_2A">
              <button class="close_video_button___2sMaB" data-di-id="di-id-effcffc4-8e8d9176">
                <svg class="gl-icon" data-di-res-id="1f9298c-b8644ccc" data-di-rand="1569458165910">
                  <use xlink:href="#close">
                  </use>
                </svg>
              </button>
              <div class="">
                <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="640" height="360" src="https://www.youtube.com/embed/pAz3ne0iUOc?showinfo=0&amp;playsinline=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.adidas.es&amp;widgetid=5" id="widget6">
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="poster_content___26X52 col-s-12 col-m-6 col-l-8 offset-s-0 offset-m-1 offset-l-3">
          <h1 class="title___udQJ_ withhtml___W0jbB gl-heading--l gl-heading--regular gl-heading--drop-shadow">
          </h1>
        </div>
      </div>
    </section>
    <!-- ========================= VIDEO .FIN// ========================= -->


    <!-- ========================= LINKS ========================= -->
    <section class="section-links bg padding-y-lg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-heading heading-line">
              <h4 class="title-section bg text-uppercase">PALABRAS MÁS BUSCADAS</h4>
            </div>
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
                  <li> <a href="contacto.php"> Contactos </a></li>
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
    <script  src="js/scriptSC.js"></script>



</body>
</html>
