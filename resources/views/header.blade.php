<header class="section-header">

  <section>
    <nav class="">
      <div class="container">
        <div class="row">

          <div class="logo1 col-sm">
            <a href="{{url('')}}"> <img src="{{ asset('images/logo0.png')}}" style="width: 100px;height: 100px;" alt="logo"></a>
          </div>

          <div class="buscador1 col-sm">
            <form action="/"  method="POST">
              {{ csrf_field() }}
              <div class="input-group w-100">
                <input type="text" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">
                      <i class="fa fa-search"></i> Buscar
                    </button>
                </div>
              </div>
            </form> <!-- busqueda .end// -->
          </div> <!-- col.// -->

          <div class="boton1 col-sm">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12 main-section">
                    <div class="dropdown">
                      <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito
                      @guest
                        <div class="dropdown-menu">
                          <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                        <p>No hay productos en el carrito</p></div></div></div>
                      @else
                        @if (Auth::user()->productsInCart->isNotEmpty())<span class="badge badge-pill badge-danger">
                        {{ Auth::user()->carritoTotal() }}
                      </span>
                      </button>
                      <div class="dropdown-menu">
                        <div class="row total-header-section">
                          <div class="col-lg-6 col-sm-6 col-6">
                            Productos </span>
                          </div>

                          <?php $total = 0 ?>
                          @foreach((array) session('cart') as $id => $details)
                          <?php $total += $details['price'] * $details['quantity'] ?>
                          @endforeach

                          <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">${{ Auth::user()->cartTotal() }}</span></p>
                          </div>
                        </div>

                        @if(Auth::user('cart'))
                        @foreach(Auth::user()->productsInCart as $productInCart)
                        <div class="row cart-detail">
                          <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="{{ $productInCart->product->image }}" />
                          </div>
                          <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $productInCart->product->name }}</p>
                            <span class="price text-info"> ${{ $productInCart->product->price }}</span> <span class="count"> Cantidad: {{ $productInCart->count }}
                            </span> <span>
                              <form action="{{ route('removeProductFromCart', ['productId' => $productInCart->product->id]) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="product_id" value="{{ $productInCart->product->id }}">
                                <button class="btn btn-danger" type="submit">X</button>
                              </form>
                            </span> </div> </div>
                            @endforeach @endif <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                  <a href="{{ url('carrito') }}" class="btn btn-primary btn-block">Ver todos</a>
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>
            </ul>
          </div>
        @else
          <div class="dropdown-menu">
            <div class="row total-header-section">
              <div class="col-lg-6 col-sm-6 col-6">
          <p>No hay productos en el carrito</p></div></div></div>
        @endif
      @endguest
        </div>
      </div>
    </nav>

  </section>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categories">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/preguntasfrecuentes">FAQ</a>
        </li>
      </ul>
    </div>

    <div class="">
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
        </li>
      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
        </li>
      @endif
      @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" width="50" alt="" style="border-radius: 50%">
          {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @if (Auth::user()->isAdmin())
            <a class="dropdown-item" href="{{ route('admin') }}">Admin</a>
        @endif
                <a class="dropdown-item" href="/perfil"><i class="fas fa-user"></i>   Mi Perfil</a>
                <a class="dropdown-item" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i>   Carrito</a>
                <a class="dropdown-item" href="{{ route('orders') }}"><i class="fas fa-truck"></i>   Mis órdenes</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>   {{ __('Cerrar sesion') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
          </li>
      @endguest
      </ul>
    </div>


  </nav>

</header> <!-- section-header.// -->
