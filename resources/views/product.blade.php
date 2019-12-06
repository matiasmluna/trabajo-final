@extends('layout')

@section('title')
  {{ $product->name }} - Digital House Market
@endsection

@section('main')
  <img src="{{ $product->image_url }}">
  <h1>{{ $product->name }}</h1>
  <p>{{ $product->description }}</p>
@endsection