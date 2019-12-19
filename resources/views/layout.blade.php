<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-reboot.min.css') }}"> -->

  <!-- Bootstrap4-->
  <script  src="{{ asset('css/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  <!-- Font awesome 5 -->
  <link href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

  <!-- plugin: owl carousel  -->
  <link href="{{ asset('plugins/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/owl.theme.default.css') }}" rel="stylesheet">
  <script src="{{ asset('plugins/owl.carousel.min.js') }}"></script>

  <!-- css -->
  <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/glass-adidas.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/flick.css') }}" rel="stylesheet"/>

  <!-- javascript -->
  <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/flick.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    // jquery ready start
    $(document).ready(function() {
    	// jQuery code
    });
    // jquery end
  </script>




<title>@yield('title')</title>

</head>
<body>
  @include('header')

  <main>
    @yield('main')
  </main>

   @include('footer')

   <!-- partial -->
   <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
   <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
   <script  src="{{ asset('css/js/scriptSC.js')}}"></script>
   <script  src="{{ asset('css/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
