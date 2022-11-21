<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/Assets/regal/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/feather/feather.css">
    <link rel="stylesheet" href="/Assets/regal/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/Assets/regal/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/Assets/Images/logo_web_klinik.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="/Assets/Images/logo_klinik_dark.svg" alt="logo">
                            </div>
                            <h4>Welcome back!</h4>
                            <h6 class="font-weight-light">Admin</h6>
                            <form class="pt-3" name="login">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0" name="username" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0" name="password" id="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="my-3">
                                    <a class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" href="/admin/dashboard">LOGIN</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Tidak Mempunyai Akun? <a href="/pages/register" class="text-primary">Buat Disini!</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <a href="/home" class="text-primary">Kembali Ke Halaman Utama</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-row" style="background-color: rgb(219,138,222) !important;">
                        <!-- <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020 All rights reserved.</p> -->
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="/Assets/regal/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="/Assets/regal/js/off-canvas.js"></script>
    <script src="/Assets/regal/js/hoverable-collapse.js"></script>
    <script src="/Assets/regal/js/template.js"></script>
    <!-- endinject -->
</body>

</html>