<div class="col-12 col-md-6 col-lg-4 mb-4">
  <a href="{{ route('product', ['categorySlug' => $product->category->slug,'product' => $product->slug]) }}" class="card">
    <img class="card-img-top" src="{{ asset('/images/backend_img/product/small/'.$product->image) }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }} ${{ $product->price }} </h5>
    </div>
  </a>
</div>
