<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">

            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center font-weight-light">
                            <div class="brand-logo">
                                <img src="../assets/images/logo.png" alt="logo" style="width: 60px; height: 50px;"> H20-Admin
                            </div>
                            <p class="login-box-msg">Estás a solo un paso de tu nueva contraseña, recupera <br> tu contraseña ahora.</p>
                        </div>
                        <form class="form-sample" id="recuperacionForm" method="get" action="#">
                            <div class="form-group">
                                <label for="correo">Nueva contraseña</label>
                                <div class="input-group">
                                    <input id="passrep" class="form-control w-100" name="passrep" type="password" placeholder="Nueva Contraseña">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="correo">Confirmar tu contraseña</label>
                                <div class="input-group">
                                    <input id="confirmpass" class="form-control w-100" name="confirmpass" type="password" placeholder="Confirmar tu contraseña">
                                </div>
                            </div>
                            <div class="my-3">
                                <button type="submit" id="enviarFormulario" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">Cambiar Contraseña</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> <a class="text-primary href="{{route('autenticacion')}}"">Iniciar sesión</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <!-- content-wrapper ends -->
    </div>

    <!-- page-body-wrapper ends -->
</div>

<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../../assets/js/form-validationRecup.js"></script>
<script src="../../../assets/js/bt-maxLength.js"></script>

<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/misc.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
