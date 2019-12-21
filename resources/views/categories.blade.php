
@extends('layout')
@section('title')
 Categorias - Sport DeeDee
@endsection

@section('main')

<div class="container">
    <div class="row">
      @foreach($categories as $category)
        @include('category-card', ['category' => $category])
      @endforeach
    </div>
  </div>

@endsection
