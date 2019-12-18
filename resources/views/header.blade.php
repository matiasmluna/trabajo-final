<header class="section-header">

  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <div class="row">

          <div class="logo col-1">
            <img src="images/logo0.png" alt="logo">
          </div>

          <div class="col-6" style="padding-top: 15px;">
            <form action="/" class="py-1" method="POST">
              {{ csrf_field() }}
              <div class="input-group w-100">
                <input type="text" class="form-control" style="width:50%;" placeholder="Buscar...">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">
                      <i class="fa fa-search"></i> Buscar
                    </button>
                </div>
              </div>
            </form>
          </div>

          <div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/perfil">Mi Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Carrito</a>
              </li>
            </ul>
          </div>

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
          <a class="nav-link" href="/categories/productos">Productos</a>
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

    <div>
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
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Cerrar sesion') }}</a>
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
