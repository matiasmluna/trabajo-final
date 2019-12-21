<div class="col-12 col-md-6 col-lg-3 p-3 mt-2">
  <a href="{{ route('category', ['categorySlug' => $category->slug]) }}" class="card">
    <img class="card-img-top"  style="border-top-right-radius: 20px 20px;border-top-left-radius: 25px 25px;" src="{{ asset('/images/backend_img/product/medium/'.$category->image) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $category->name }}</h5>
    </div>
  </a>
</div>
