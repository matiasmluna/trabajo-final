@extends('layout')

@section('title')
  Products - Digital House Market
@endsection

@section('main')

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


@endsection
