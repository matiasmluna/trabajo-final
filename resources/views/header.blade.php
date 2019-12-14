


<header class="section-header">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <!-- <a class="navbar-brand" href="#">
            <img class="logo" src="images/logos/logo DG-01.png" alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme">
          </a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTop">
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
                                <img class="user-avatar" src="/storage/{{Auth::user()->avatar}}" alt="">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->isAdmin())
                                  <a class="dropdown-item" href="{{ route('admin') }}">
                                      Admin
                                  </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>


      </div>
    </nav>

<section>
  <header>
    <div class="iconostop">
      <ul>
        <li class="perfil"><i href= "" class="fas fa-user"></i>   Mi perfil</li>
        <li class="carrito"><i href= "" class="fas fa-shopping-basket"></i>  Carrito</li>
        <li class="login"><i href= "" class="fas fa-sign-out-alt"></i>   Iniciar sesión</li>
        <li class="logout"><i href= "" class="fas fa-sign-in-alt"></i>   Salir</li>
      </ul>
    </div>

    <div class="logo">
      <img src="images/logo0.png" alt="logo">
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Marcas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Categorias</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contacto</a>
  </li>
</ul>
</div>
</nav>
</section>

</header> <!-- section-header.// -->
