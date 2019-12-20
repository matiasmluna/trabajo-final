@extends('layout')

@section('title')
{{ $product->name }} - Sport DeeDee
@endsection

@section('main')

@section('main')

  <div class="container-fluid">
    <div class="row mt-5 mb-5">
      <div class="col-xs-9 col-md-7">
          <img src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
      </div>
      <div class="col-xs-3 col-md-5" >
        <h2 class="product-category-name">
          <a href="{{ route('category', ['categorySlug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
        </h2>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <h3 class=" font-weight-bold">${{ $product->price }}</h3>
        @guest
          <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Agregar al carrito</button>
        @else
          <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <label for="count">Cantidad</label>
            <select id="count" name="count">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <br />
            <button type="submit" class="btn btn-dark btn-lg">Agregar al carrito</button>
          </form>
        @endguest
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>
@endsection
@endsection
