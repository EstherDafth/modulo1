<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
              <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                  <img src="../assets/images/logo.png" alt="logo" style="width: 60px; height: 50px;"> Bienvenido a H20-Admin

                </div>

                <h4>Autenticación</h4>

                <form class="form-sample" id="loginForm" method="get" action="#">
                  <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <div class="input-group">
                      <input id="correo" class="form-control w-100" name="correo" type="email" placeholder="Correo">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <div class="input-group">
                      <input id="contraseña" class="form-control w-100" name="contraseña" type="password" placeholder="Contraseña">
                    </div>
                  </div>

                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="text-center font-weight-light" data-toggle="modal" data-target="#exampleModal-4">¿Has olvidado tu contraseña?</a>
                  </div>
                  <div class="my-3">
                    <button type="submit" id="enviarFormulario" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">Iniciar sesión</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> ¿No tienes una cuenta? <a href="../RegisterViews/registrarusuario.blade.php" class="text-primary">Crear</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <!--<p class="text-white font-weight-medium text-center flex-grow align-self-end">
                ¿No tienes una cuenta?
                <a href="registrarusuario.blade.php" class="text-primary mt-2">Crear cuenta</a>
              </p>-->

            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
   <!-- Modal de Recuperación de Contraseña -->
    <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Olvidé mi contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="recuperacionForm">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Introduzca su CURP y le enviaremos un código de confirmación para la recuperación de la contraseña.</label>
                <label for="message-text" class="col-form-label">CURP</label>
                <input id="curpre" class="form-control" name="curpre" type="text" placeholder="CURP">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" form="recuperacionForm" class="btn btn-success">Solicitar una nueva contraseña</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <!--Mensaje de recuperacion-->
      <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mensaje">Olvidé mi contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form >
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Se ha enviado .</label>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <script src="../../../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <!-- Custom js for this page -->
    <script src="../../../assets/js/form-validationAuth.js"></script>
    <script src="../../../assets/js/form-validationRecup.js"></script>
    <script src="../../../assets/js/bt-maxLength.js"></script>
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="../../../assets/js/modal-demo.js"></script>
    <!-- endinject -->
  </body>


</html>
