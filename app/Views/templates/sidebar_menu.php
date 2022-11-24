<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Klinik</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/Assets/regal/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/feather/feather.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/Assets/regal/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/Assets/regal/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/Assets/regal/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/Assets/Images/logo_web_klinik.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="/Assets/regal/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/Assets/regal/images/logo-mini.svg" alt="logo" /></a> -->
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-flex mr-4 ">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-grid"></i></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
                            <a class="dropdown-item preview-item" href="/home">
                                <i class="icon-layout"></i> Halaman Beranda
                            </a>
                            <a class="dropdown-item preview-item" href="<?= url_to('logout'); ?>">
                                <i class="icon-inbox"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-profile">
                    <div class="user-image">
                        <img src="/Assets/Images/foto_admin.jpg">
                    </div>
                    <div class="user-name">
                        <?= user()->username; ?>
                    </div>
                    <div class="user-designation">
                        Admin
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/halaman_admin">
                            <i class="icon-box menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/halaman_treatment">
                            <i class="icon-moon menu-icon"></i>
                            <span class="menu-title">Treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-bag menu-icon"></i>
                            <span class="menu-title">Data Order</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin/halaman_daftar_order">Daftar Order</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin/halaman_order_complete">Order Complete</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin/halaman_order_cancel">Order Cancel</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/halaman_kritik_saran">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Kritik dan Saran</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <?= $this->renderSection('content'); ?>
            <!-- partial -->

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="/Assets/regal/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/Assets/regal/js/off-canvas.js"></script>
    <script src="/Assets/regal/js/hoverable-collapse.js"></script>
    <script src="/Assets/regal/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="/Assets/regal/vendors/chart.js/Chart.min.js"></script>
    <script src="/Assets/regal/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="/Assets/regal/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="/Assets/regal/vendors/select2/select2.min.js"></script>
    <script src="/Assets/regal/js/dashboard.js"></script>
    <script src="/Assets/regal/js/typeahead.js"></script>
    <script src="/Assets/regal/js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>