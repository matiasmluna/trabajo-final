@extends('layout')

@section('title')
  Products - Digital House Market
@endsection

@section('main')

<div class="container">

 <div class="row">
   @foreach ($productAll as $producto)
    <div class="col-12 col-md-6 col-lg-3">
      <div class="containerCard">
        <div class="card">
          <div class="card-head2">
            <img src="{{ asset('images/adilogo.jpg') }}" alt="logo" class="card-logo">
            <img src="{{ asset('images/adidas1-1.jpg') }}" alt="Shoe" class="product-img">
              <div class="product-detail">
                <h2>{{$producto->product_name}}</h2>
              </div>
          </div>
          <div class="card-body">
            <div class="product-desc">
              <span class="product-title">Pre<b>dator</b>
                <span class="badge">Nuevo</span>
              </span>
              <span class="product-caption">Adidas Predator 19.4 S FG</span>
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
                    <li><a href="#" class="active">43</a></li>
                  </ul>
              </span>
              <span class="product-price2">$<b>4,999.00</b></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>

<div class="container">

  <p>{{$productAll->links()}}</p>

</div>
@endsection
