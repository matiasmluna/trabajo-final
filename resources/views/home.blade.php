@extends('layout')

@section('title')
  Didi Tienda Deportiva
@endsection

@section('main')
  <h1>Estás en la home</h1>
  <ul>
    @foreach ($categories as $category)
    <li>
      <a href="{{ route('category', ['categorySlug' => $category->slug]) }}">
        {{ $category->name }}
      </a>
    </li>
    @endforeach
  </ul>

  <body>


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


</body>

@endsection