<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                    Hallo, <strong><?php echo $this->session->userdata('nama') ?> - <?php echo $this->session->userdata('no_ktp') ?></strong> Silahkan kelola pesanan mobil untuk kebutuhan pelanggan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ti ti-close"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="alert border-0 alert-info alert-dismissible fade show border-radius-none" role="alert">
                    Total Pelanggan : <strong><?php echo $pelanggan ?></strong> <br> <a href="<?= base_url('admin/data_customer') ?>" class="badge badge-primary">Lihat Pelanggan</a>
                </div>

            </div>

            <div class="col-md-3 mb-4">
                <div class="alert border-0 alert-warning alert-dismissible fade show border-radius-none" role="alert">
                    Total Kendaraan : <strong><?php echo $mobil ?></strong> <br> <a href="<?= base_url('admin/data_mobil') ?>" class="badge badge-primary">Lihat Kendaraan</a>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="alert border-0 alert-danger alert-dismissible fade show border-radius-none" role="alert">
                    Total Pesanan : <strong><?php echo $pesanan ?></strong> <br> <a href="<?= base_url('admin/transaksi') ?>" class="badge badge-primary">Lihat Pesanan</a>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="alert border-0 alert-secondary alert-dismissible fade show border-radius-none" role="alert">
                    Total Wisata : <strong><?php echo $wisata ?></strong> <br> <a href="<?= base_url('admin/data_wisata') ?>" class="badge badge-primary">Lihat Objek Wisata</a>
                </div>
            </div>
        </div>

    </div>
    <!-- end container-fluid -->
</div>
<!-- end app-main -->
</div>
<!-- end app-container -->