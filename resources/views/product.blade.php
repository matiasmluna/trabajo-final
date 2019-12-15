@extends('layout')

@section('title')
  Products - Digital House Market
@endsection

@section('main')

<div class="container py-5">
    <div class="row">
      @foreach ($productAll as $producto)
      <div class="col-12 col-md-6 col-lg-4">
        <a href="" class="card">
          <img class="card-img-top" height="100%" weight="100%" src="images/fotozapatilla.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$producto->product_name}}</h5>
          </div>
        </a>
      </div>
      @endforeach
    </div>
</div>

<div class="center">

  <p>{{$productAll->links()}}</p>

</div>
@endsection
