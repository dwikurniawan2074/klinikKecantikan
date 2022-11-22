<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
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
                            <h4><?= lang('Auth.register') ?></h4>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form action="<?= url_to('register') ?>" method="post" class="pt-3">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="username" class="form-control form-control-lg border-left-0 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-email-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" class="form-control form-control-lg border-left-0 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg border-left-0 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="pass_confirm" class="form-control form-control-lg border-left-0 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" ><?=lang('Auth.register')?></button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <p> <?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>" class="text-primary"><?=lang('Auth.signIn')?></a></p>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <a href="/home" class="text-primary">Kembali Ke Halaman Utama</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020 All rights reserved.</p>
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