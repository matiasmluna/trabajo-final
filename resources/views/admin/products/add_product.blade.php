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
                                    <li class="breadcrumb-item active" aria-current="page">Agregar Productos</li>
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
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                    <h5>Agregar Productos</h5>
                                </div>
                                <div class="widget-content nopadding">
                                    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-product') }}" name="add_product" id="add_product">{{ csrf_field() }}
                                        <div class="control-group">
                                            <label class="control-label">Selecciona la categoria</label>
                                            <div class="controls">
                                                <select name="category_id" id="category_id" style="width:220px;" required>
                                                    <?php echo $categories_drop_down; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <p>Nombre: <br><input id="name" title="Debe tener mas de 3 letras" type="text" name="name" required pattern="[A-Z]).{3,}"></p>
                                        <p>Slug: <br><input id="slug" title="Deben ser letras" type="text" name="slug" required pattern="[A-z]).{3,20}"></p>
                                        <p>Color: <br><input id="product_color" title="Debe ser un color" type="text" name="product_color" required pattern="[A-z]).{3,20}"></p>
                                        <p>Precio: <br><input id="price" title="Debe ser numero" type="text" name="price" required pattern="[0-9]{1,20}"></p>
                                        <p>Descripcion: <br><textarea id="description" title="Debes incluir una descripcion" type="text" required pattern="[A-Z]).{1,1000}" name="description" cols="30"></textarea></p>
                                        <p>Imagen: <br><input id="image" title="" type="file" name="image"></p>
                                        <p>Disponible <br><input type="checkbox" name="status" id="status" value="1"></p>
                                        <p><input type="submit" value="Agregar producto" class="btn btn-success"></p>
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

                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded", function() {

                            // JavaScript form validation

                            var checkPassword = function(str) {
                                var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
                                return re.test(str);
                            };

                            var checkForm = function(e) {
                                if (this.username.value == "") {
                                    alert("Error: Username cannot be blank!");
                                    this.username.focus();
                                    e.preventDefault(); // equivalent to return false
                                    return;
                                }
                                re = /^\w+$/;
                                if (!re.test(this.username.value)) {
                                    alert("Error: Username must contain only letters, numbers and underscores!");
                                    this.username.focus();
                                    e.preventDefault();
                                    return;
                                }
                                if (this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
                                    if (!checkPassword(this.pwd1.value)) {
                                        alert("The password you have entered is not valid!");
                                        this.pwd1.focus();
                                        e.preventDefault();
                                        return;
                                    }
                                } else {
                                    alert("Error: Please check that you've entered and confirmed your password!");
                                    this.pwd1.focus();
                                    e.preventDefault();
                                    return;
                                }
                                alert("Both username and password are VALID!");
                            };

                            var myForm = document.getElementById("myForm");
                            myForm.addEventListener("submit", checkForm, true);

                            // HTML5 form validation

                            var supports_input_validity = function() {
                                var i = document.createElement("input");
                                return "setCustomValidity" in i;
                            }

                            if (supports_input_validity()) {
                                var usernameInput = document.getElementById("field_username");
                                usernameInput.setCustomValidity(usernameInput.title);

                                var pwd1Input = document.getElementById("field_pwd1");
                                pwd1Input.setCustomValidity(pwd1Input.title);

                                var pwd2Input = document.getElementById("field_pwd2");

                                // input key handlers

                                usernameInput.addEventListener("keyup", function(e) {
                                    usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
                                }, false);

                                pwd1Input.addEventListener("keyup", function(e) {
                                    this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
                                    if (this.checkValidity()) {
                                        pwd2Input.pattern = RegExp.escape(this.value);
                                        pwd2Input.setCustomValidity(pwd2Input.title);
                                    } else {
                                        pwd2Input.pattern = this.pattern;
                                        pwd2Input.setCustomValidity("");
                                    }
                                }, false);

                                pwd2Input.addEventListener("keyup", function(e) {
                                    this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
                                }, false);

                            }

                        }, false);
                    </script>
</body>

</html>
@endsection
