<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/component.css">
  <link rel="stylesheet" href="/css/custom.css">
  <link rel="stylesheet" href="/css/flick.css">
  <link rel="stylesheet" href="/css/glass-adidas.css">
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="stylesheet" href="/css/style 2.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/ui.css">
  
  

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  <script  src="js/scriptSC.js"></script>
  <script  src="js/script.js"></script>
  <script  src="js/flick.js"></script>
  <script  src="js/jquery-2.0.0.min.js"></script>

  <title>@yield('title')</title>
</head>
<body>
  @include('header')

  <main>
    @yield('main')
  </main>

  @include('footer')
</body>
</html>