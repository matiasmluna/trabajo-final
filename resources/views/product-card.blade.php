<style media="screen">
form {
  width: 100%;
  text-align: center;
}
</style>

<div class="col-12 col-md-6 col-lg-3 mb-4">
  <a href="{{ route('product', ['categorySlug' => $product->category->slug,'product' => $product->slug]) }}" class="card">
    <img class="card-img-top" style="border-top-right-radius: 25px 25px;border-top-left-radius: 25px 25px;" src="{{ asset('/images/backend_img/product/small/'.$product->image) }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }} ${{ $product->price }} </h5>
    </div>
    @guest
      
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
  </a>
</div>
