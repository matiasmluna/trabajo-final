
@extends('layout')
@section('title')
 Categorias Sport DeeDee
@endsection

@section('main')

<!-- <div class="container">
  <div class="row">

    @foreach($categories as $category)
      <div class="card-head3" style="width: 18rem;height:18rem;margin: 10px;border-width: 5px;border-color:rgba(180, 187, 181, 0.5);201, 207, 200;border-style: solid;border-radius: 32px 32px 32px 32px;">
        <img src="{{ asset('images/adidas1-1.jpg') }}" class="card-img-top" alt="Botines">
        <div class="card-body">
          <a href="/categories/{{ $category->slug }}" class="btn btn-primary">{{ $category->name }}</a>
        </div>
      </div>
    @endforeach
  </div>
</div> -->

<div class="container py-4">
    <div class="row">
      @foreach($categories as $category)
        @include('category-card', ['category' => $category])
      @endforeach
    </div>
  </div>

@endsection
