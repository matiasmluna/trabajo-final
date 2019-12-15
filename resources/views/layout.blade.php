<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('images/logo0.png') }}">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-reboot.min.css') }}">
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
