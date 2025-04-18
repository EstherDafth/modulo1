<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body class="sidebar-icon-only">
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="perfildeusuario.html"><img src="../assets/images/logo.png" alt="logo" />
</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reports </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc </a>
              </div>
            </li>
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Projects </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-eye-outline mr-2"></i>View Project </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-pencil-outline mr-2"></i>Edit Project </a>
              </div>
            </li>
            <li class="nav-item nav-language dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-language-icon">
                  <i class="flag-icon flag-icon-us" title="us" id="us"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="#">
                  <div class="nav-language-icon mr-2">
                    <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
                  </div>
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">Arabic</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="nav-language-icon mr-2">
                    <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                  </div>
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">English</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../../assets/images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Henry Klein</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../../assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('logout')}}">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default light"></div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
                <span class="menu-title">Page Layouts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/boxed-layout.html">Boxed</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/rtl-layout.html">RTL</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <span class="icon-bg"><i class="mdi mdi-playlist-play menu-icon"></i></span>
                <span class="menu-title">Sidebar Layouts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/samples/widgets.html">
                <span class="icon-bg"><i class="mdi mdi-widgets menu-icon"></i></span>
                <span class="menu-title">Widgets</span>
              </a>
            </li>
            <li class="nav-item nav-category">UI Features</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/accordions.html">Accordions</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.html">Badges</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/modals.html">Modals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/progress.html">Progress bar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/pagination.html">Pagination</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tabs.html">Tabs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tooltips.html">Tooltip</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <span class="icon-bg"><i class="mdi mdi-cards-variant menu-icon"></i></span>
                <span class="menu-title">Advanced UI</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Dragula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.html">Clipboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/context-menu.html">Context menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/slider.html">Slider</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/colcade.html">Colcade</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/carousel.html">Carousel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/loaders.html">Loaders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/treeview.html">Tree View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/ui-features/popups.html">
                <span class="icon-bg"><i class="mdi mdi-forum menu-icon"></i></span>
                <span class="menu-title">Popups</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/ui-features/notifications.html">
                <span class="icon-bg"><i class="mdi mdi-bell-ring menu-icon"></i></span>
                <span class="menu-title">Notifications</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Material</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/flag-icons.html">Flag icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/simple-line-icon.html">Simple line icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/themify.html">Themify icons</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.html">Form Elements</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced Forms</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">Editors</li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/text_editor.html">
                <span class="icon-bg"><i class="mdi mdi-file-document menu-icon"></i></span>
                <span class="menu-title">Text editors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/code_editor.html">
                <span class="icon-bg"><i class="mdi mdi-code-not-equal-variant menu-icon"></i></span>
                <span class="menu-title">Code editors</span>
              </a>
            </li>
            <li class="nav-item nav-category">Data Representation</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/morris.html">Morris</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/flot-chart.html">Flot</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/google-charts.html">Google charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline js</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/c3.html">C3 charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartist.html">Chartist</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/justGage.html">JustGage</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <span class="icon-bg"><i class="mdi mdi-map-marker-radius menu-icon"></i></span>
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/maps/google-maps.html">Google Maps</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/maps/mapael.html">Mapael</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/maps/vector-map.html">Vector map</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">Sample Pages</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/mutli-level-login.html"> Multi step login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <span class="icon-bg"><i class="mdi mdi-security menu-icon"></i></span>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="icon-bg"><i class="mdi mdi-medical-bag menu-icon"></i></span>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/user-listing.html"> User listing </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/portfolio.html"> Portfolio </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">Applications</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <span class="icon-bg"><i class="mdi mdi-shopping menu-icon"></i></span>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/invoice.html"> Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/pricing-table.html"> Pricing Table </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/orders.html"> Orders </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/emailer.html"> Email template </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/product-catalogue.html"> Product catalogue </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/project-list.html"> project list </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/kanban-board.html">
                <span class="icon-bg"><i class="mdi mdi-tablet-dashboard menu-icon"></i></span>
                <span class="menu-title">Kanban Board</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/email.html">
                <span class="icon-bg"><i class="mdi mdi-email menu-icon"></i></span>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/calendar.html">
                <span class="icon-bg"><i class="mdi mdi-calendar-today menu-icon"></i></span>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/todo.html">
                <span class="icon-bg"><i class="mdi mdi-playlist-edit menu-icon"></i></span>
                <span class="menu-title">Todo list</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/tickets.html">
                <span class="icon-bg"><i class="mdi mdi-ticket menu-icon"></i></span>
                <span class="menu-title">Tickets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/chat.html">
                <span class="icon-bg"><i class="mdi mdi-chat menu-icon"></i></span>
                <span class="menu-title">Chat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/apps/gallery.html">
                <span class="icon-bg"><i class="mdi mdi-image-filter-frames menu-icon"></i></span>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <li class="nav-item documentation-link">
              <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect-plus/jquery/documentation/documentation.html">
                <span class="icon-bg">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src="../../../assets/images/faces/face28.png" alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">Henry Klein</p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger">3</div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                  <span class="menu-title">Take Tour</span></a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
                  <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                  <button type="button" class="btn btn-link text-light py-0">3 Month</button>
                </div>
                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                  <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h4 class="card-title mb-0">Recent Activity</h4>
                                  <div class="dropdown dropdown-arrow-none">
                                    <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                      <h6 class="dropdown-header">Settings</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                                <div class="wrapper pb-5 border-bottom">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0 text-dark">Total Profit</p>
                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                                  </div>
                                  <h3 class="mb-0 text-dark font-weight-bold">$ 92556</h3>
                                  <canvas id="total-profit"></canvas>
                                </div>
                                <div class="wrapper pt-5">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0 text-dark">Expenses</p>
                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                                  </div>
                                  <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>
                                  <canvas id="total-expences"></canvas>
                                </div>
                              </div>
                              <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                                <div class="pl-0 pl-lg-4 ">
                                  <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                    <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                      <h3 class="text-dark font-weight-bold mr-2 mb-0">Devices sales</h3>
                                      <h5 class="mb-0">( growth 62% )</h5>
                                    </div>
                                    <div class="d-lg-flex">
                                      <p class="mr-2 mb-0">Timezone:</p>
                                      <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                                    </div>
                                  </div>
                                  <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                  <canvas id="device-sales"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card card-danger-gradient">
                          <div class="card-body mb-4">
                            <h4 class="card-title text-white">Account Retention</h4>
                            <canvas id="account-retension"></canvas>
                          </div>
                          <div class="card-body bg-white pt-4">
                            <div class="row pt-4">
                              <div class="col-sm-6">
                                <div class="text-center border-right border-md-0">
                                  <h4>Conversion</h4>
                                  <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="text-center">
                                  <h4>Cancellation</h4>
                                  <h1 class="text-dark font-weight-bold">$1,520</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-xl-flex justify-content-between mb-2">
                              <h4 class="card-title">Page views analytics</h4>
                              <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                            </div>
                            <canvas id="page-view-analytic"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body recent-activity">
                            <h4 class="card-title">Recent Activity</h4>
                            <div class="d-flex mb-3">
                              <div>
                                <div class="activity-info bg-danger"> I </div>
                              </div>
                              <div class="activity-details">
                                <h4 class="text-dark font-weight-normal">Iva Barber</h4>
                                <p class="mb-0">added new task on trello</p>
                                <p class="text-small mb-0">05:58AM</p>
                              </div>
                            </div>
                            <div class="d-flex mb-3">
                              <div class="activity-info bg-warning"> D </div>
                              <div class="activity-details">
                                <h4 class="text-dark font-weight-normal">Dorothy Romero</h4>
                                <p class="mb-0">added new task on trello</p>
                                <p class="text-small mb-0">02:50PM</p>
                              </div>
                            </div>
                            <div class="d-flex mb-3">
                              <div class="activity-info bg-success"> R </div>
                              <div class="activity-details">
                                <h4 class="text-dark font-weight-normal">Ricardo Hawkins</h4>
                                <p class="mb-0">added new task on trello</p>
                                <p class="text-small mb-0">05:22AM</p>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="activity-info hide-border bg-info"> N </div>
                              <div class="activity-details">
                                <h4 class="text-dark font-weight-normal">Noah Montgomery</h4>
                                <p class="mb-0">added new task on trello</p>
                                <p class="text-small mb-0">08:19PM</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">My Balance</h4>
                            <div class="d-lg-flex justify-content-between align-items-center">
                              <h1 class="text-dark mb-0">$3258</h1>
                              <p class="text-success mb-0 font-weight-medium">+30.56% ($121)</p>
                            </div>
                            <p class="mb-5 pb-1">Deposit: <span class="font-weight-bold">$5430</span></p>
                            <canvas id="my-balance"></canvas>
                            <div class="border p-3 mt-2">
                              <div class="row">
                                <div class="col-sm-6 mb-4 mb-lg-0">
                                  <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="text-small text-dark">Available :</div>
                                    <span class="font-weight-bold text-dark text-small ">30.56%</span>
                                  </div>
                                  <div class="progress progress-sm mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="d-lg-flex justify-content-between align-items-center">
                                    <div class="text-small text-dark">Pending :</div>
                                    <span class="font-weight-bold text-small text-dark">69.44%</span>
                                  </div>
                                  <div class="progress progress-sm mt-1">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="dotted-border p-3 mb-3">
                              <div class="row">
                                <div class="col-sm-12">
                                  <h4 class="card-title mb-1">Sales Prediction</h4>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-1"></canvas>
                                  <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>
                                  <p class="text-muted mb-0">350-985 sales</p>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-2"></canvas>
                                  <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>
                                  <p class="text-muted mb-0">350-985 sales</p>
                                </div>
                              </div>
                            </div>
                            <div class="dotted-border p-3">
                              <div class="row">
                                <div class="col-sm-12">
                                  <h4 class="card-title mt-4 mb-1">Stock History</h4>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-3"></canvas>
                                  <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>
                                  <p class="mb-0 text-muted">350-985 sales</p>
                                </div>
                                <div class="col-sm-6">
                                  <canvas id="prediction-4"></canvas>
                                  <h3 class="font-weight-bold text-dark  mt-3">$3258</h3>
                                  <p class="mb-0 text-muted">350-985 sales</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../../assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
