@extends('layouts.adminLayout.admin-design')
@section('content')
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('js/backend_js/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('js/backend_js/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">
    <style>
        [type=submit],
        button,
        html [type=button] {
            float: right;
            background: #2962FF;
            color: #fff;
            display: block;
            padding: 7px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
        }
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Opciones</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar Productos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                    @endif
                    <hr>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                    <h5>Editar Productos</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/edit-product/'.$productDetails->id) }}" name="edit_product" id="edit_product">{{ csrf_field() }}
                                        <div class="control-group">
                                            <label class="control-label">Selecciona la categoria</label>
                                            <div class="controls">
                                                <select name="category_id" id="category_id" style="width:220px;" required>
                                                    <?php echo $categories_drop_down; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <p>Nombre: <br><input id="product_name" title="Debe tener mas de 3 letras" type="text" name="product_name" required pattern="[A-Z]).{3,}" value="{{ $productDetails->product_name }}"></p>
                                        <p>Codigo: <br><input id="product_code" title="Deben ser numeros" type="text" name="product_code" required pattern="[0-9]{1,10}" value="{{ $productDetails->product_code }}"></p>
                                        <p>Color: <br><input id="product_color" title="Debe ser un color" type="text" name="product_color" required pattern="[A-z]).{3,20}" value="{{ $productDetails->product_color }}"></p>
                                        <p>Price: <br><input id="price" title="Debe ser numero" type="text" name="price" required pattern="[0-9]{1,20}" value="{{ $productDetails->price }}"></p>
                                        <p>Descripcion: <br><textarea id="description" title="Debes incluir una descripcion" type="text" required pattern="[A-Z]).{1,1000}" name="description" cols="30">{{ $productDetails->description }}"</textarea></p>
                                        <p>Imagen: <br>
                                            @if(!empty($productDetails->image))
                                            <img src="{{ asset('/images/backend_img/product/small/'.$productDetails->image) }}" style="width:300px;">
                                            | <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Borrar</a>
                                            <br><br>Cambiar imagen: @endif<input id="image" title="" type="file" name="image"></p>

                                        @if(!empty($productDetails->image))
                                        <input type="hidden" name="current_image" value="{{ $productDetails->image }}">
                                        @endif
                                        <p>Disponible <br><input type="checkbox" name="status" id="status" value="{{ $productDetails->status }}"></p>
                                        <p><input type="submit" value="Editar producto" class="btn btn-success"></p>



                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Wrapper -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- All Jquery -->
                    <!-- ============================================================== -->
                    <!-- this page js -->


</body>

</html>
@endsection
