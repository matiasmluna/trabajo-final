<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
