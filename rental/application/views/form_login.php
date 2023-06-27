<!DOCTYPE html>
<html lang="en">


<head>
    <title>BOLT.</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->

    <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/sss.PNG">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/style.css" />
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader container-fluid">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="<?php echo base_url('assets') ?>/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2">BOLT.</h1>
                                        <p>Hi, silahkan masukan username dan password anda.</p>
                                        <form method="POST" action="<?php echo base_url('auth/login') ?>" class="mt-3 mt-sm-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input id="username" type="text" class="form-control" autocomplete="off" name="username" tabindex="1" required autofocus>
                                                        <div class="invalid-feedback">
                                                            Silahkan lengkapi username anda!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                                        <div class="invalid-feedback">
                                                            Silahkan lengkapi sandi anda!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" class="btn btn-primary text-uppercase">Masuk</button>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>Belum punya akun ?<a href="<?php echo base_url('register') ?>"> Daftar</a></p>
                                                </div>
                                                <div class="col-12  mt-3">
                                                <a  href="../index.php?page=home">Back to Landing Page</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 o-hidden order-1 order-sm-2" >
                                <div class="row align-items-center h-100">
                                    <!-- <div class="col-7 mx-auto "> -->
                                        <img class="img-fluid" src="<?php echo base_url('assets') ?>/img/bg/gedung.JPG" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="<?php echo base_url('assets') ?>/js/vendors.js"></script>
    <!-- custom app -->
    <script src="<?php echo base_url('assets') ?>/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css"></script>
    <?php
    $pesan = $this->session->flashdata('gagal');
    if (!empty($pesan)) :
    ?>
        <script>
            $(window).on('load', function() {
                let pesan = "<?= $pesan ?>";
                toastr.error(pesan, "Terjadi Kesalahan!", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "400",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            });
        </script>
    <?php endif; ?>

    <?php
    $pesan = $this->session->flashdata('sukses');
    if (!empty($pesan)) :
    ?>
        <script>
            $(window).on('load', function() {
                let pesan = "<?= $pesan ?>";
                toastr.success(pesan, "HI, <?php echo $this->session->userdata('nama') ?>", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            });
        </script>
    <?php endif; ?>
</body>


</html>