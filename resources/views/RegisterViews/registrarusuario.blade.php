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
              <div class="row flex-grow">
                <div class="col-lg-8 d-flex align-items-center justify-content-center">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center font-weight-light">
                        <h4>Registro</h4><br>
                        </div>
                        <form class="form-sample" id="signupForm" method="get" action="{{route("register.store")}}">
                            <h4>Información personal</h4>
                        <!-- Información Personal: Nombre y Apellidos -->
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                  <input id="firstname" class="form-control" name="firstname" type="text" placeholder="Nombre">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Apellidos</label>
                                <div class="col-sm-9">
                                  <input id="lastname" class="form-control" name="lastname" type="text" placeholder="Apellidos">
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Teléfono (opcional)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-phone text-primary"></i>
                                                </span>
                                            </div>
                                            <input class="form-control form-control-lg border-left-0" maxlength="10" name="telefono" id="defaultconfig-2" type="text" placeholder="Teléfono">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Celular   </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-cellphone text-primary"></i>
                                                </span>
                                            </div>
                                            <input class="form-control form-control-lg border-left-0" maxlength="10" name="celular" id="defaultconfig-3" type="text" placeholder="Celular">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">CURP</label>
                                <div class="col-sm-9">
                                  <input id="curp" class="form-control" name="curp" type="text" placeholder="CURP">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">

                              </div>
                            </div>
                        </div>

                        <h4>Información de la cuenta</h4>

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nombre de Usuario</label>
                                <div class="col-sm-9">
                                  <input id="username" class="form-control" name="username" type="text" placeholder="Nombre de Usuario">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Correo</label>
                                <div class="col-sm-9">
                                  <input id="email" class="form-control" name="email" type="email" placeholder="Correo">
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-sm-9">
                                  <input id="password" class="form-control" name="password" type="password" placeholder="Contraseña">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Confirmar Contraseña</label>
                                <div class="col-sm-9">
                                  <input id="confirm_password" class="form-control" name="confirm_password" type="password" placeholder="Confirmar Contraseña">
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-4 mx-auto">
                              <button type="submit" id="enviarFormulario" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">Registrar</button>
                            </div>
                        </div>

                    </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 register-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end mt-3">
                    ¿Ya tienes una cuenta?
                  <a href="{{route('autenticacion')}}" class="text-primary mt-2">Iniciar sesión</a>
              </p>
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
    <script src="../../../assets/js/form-validation.js"></script>
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
  </body>
</html>

