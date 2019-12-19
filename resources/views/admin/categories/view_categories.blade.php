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
    <link rel="stylesheet" type="text/css" href="{{ asset('js/backend_js/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('js/backend_js/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">
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
                                    <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
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
                    <hr>
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
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                    <h5>Todas las Categorias</h5>
                                </div>
                                <div class="widget-content nopadding">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Categorias</h5>
                                            <div class="table-responsive">
                                                <table id="zero_config" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombre</th>
                                                            <th>Slug</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($categories as $category)
                                                        <tr class="gradeX">
                                                            <td class="center">{{ $category->id }}</td>
                                                            <td class="center">{{ $category->name }}</td>
                                                            <td class="center">{{ $category->url }}</td>
                                                            <td class="center">
                                                                <a href="{{ url('/admin/edit-category/'.$category->id) }}" class="btn btn-primary btn-mini">Editar</a>
                                                                <a id="delCat" href="{{ url('/admin/delete-category/'.$category->id) }}" rel="{{ $category->id }}" rel1="delete-category" href="{{ url('/admin/delete-category/'.$category->id) }}" class="btn btn-danger btn-mini deleteRecord" onclick="return confirm('Estas seguro que deseas eliminarla?')">Borrar</a></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombre</th>
                                                            <th>Slug</th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
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
                    <script src="{{ asset('js/backend_js/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
                    <script src="{{ asset('js/backend_js/libs/jquery/dist/jquery.min.js') }}"></script>
                    <!-- Bootstrap tether Core JavaScript -->
                    <script src="{{ asset('js/backend_js/libs/popper.js/dist/umd/popper.min.js') }}"></script>
                    <script src="{{ asset('js/backend_js/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                    <!-- slimscrollbar scrollbar JavaScript -->
                    <script src="{{ asset('js/backend_js/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
                    <script src="{{ asset('js/backend_js/extra-libs/sparkline/sparkline.js') }}"></script>
                    <!--Wave Effects -->
                    <script src="{{ asset('js/backend_js//waves.js') }}"></script>
                    <!--Menu sidebar -->
                    <script src="{{ asset('js/backend_js//sidebarmenu.js') }}"></script>
                    <!--Custom JavaScript -->
                    <script src="{{ asset('js/backend_js/custom.min.js') }}"></script>
                    <!-- this page js -->
                    <script src="{{ asset('js/backend_js/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
                    <script src="{{ asset('js/backend_js/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
                    <script src="{{ asset('js/backend_js/extra-libs/DataTables/datatables.min.js') }}"></script>
                    <script>
                        /****************************************
                         *       Basic Table                   *
                         ****************************************/
                        $('#zero_config').DataTable();
                    </script>
</body>

</html>
@endsection
