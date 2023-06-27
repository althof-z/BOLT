<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOLT.</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/shop') ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/shop') ?>/css/loopple/loopple.css">
    <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/sss.PNG">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand w-8" href="#" data-config-id="brand">
            <img src="<?php echo base_url('assets') ?>./logoo.png" class="img-fluid logo-mobile" alt="logo" />
            </a>

            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item mx-2">
                        <a href="<?php echo base_url('dashboard') ?>" class="nav-link ps-2 cursor-pointer">
                            <font color="#8A2BE2"><b>BERANDA</b></font>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="<?php echo base_url('customer/transaksi') ?>" class="nav-link ps-2 cursor-pointer">
                            <font color="#8A2BE2"><b>RIWAYAT PESANAN</b></font>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-2">
                        <?php if ($this->session->userdata('nama')) { ?>
                            <a href="<?php echo base_url('auth/logout') ?>" class="btn bg-gradient-light mb-0">
                                <font color="#8A2BE2">Hi, <?php echo $this->session->userdata('nama') ?> | Logout</font>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('auth/login') ?>" class="btn bg-gradient-light mb-0">
                                <font color="#8A2BE2">Masuk</font>
                            </a>
                        <?php } ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>