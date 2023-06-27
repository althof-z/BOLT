    <div class="app-main" id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 m-b-30 mt-3">
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="card-header alert-primary text-white">
                            INFORMASI PESANAN ANDA
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <div class="card-heading">
                                <div class="alert border-0 alert-info bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                                    <strong>HI, <?php echo $this->session->userdata('nama') ?></strong> Silahkan pilih pesanan kendaraan dan objek wisata untuk kebutuhan keluarga anda.
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($detail as $dt) : ?>
                                <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga Sewa (per hari)</label>
                                                <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                                                <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Rental</label>
                                                <input type="date" name="tanggal_rental" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Denda (per hari)</label>
                                                <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Kembali</label>
                                                <input type="date" name="tanggal_kembali" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Objek Wisata (Opsional)</label>
                                            <select name="id_wisata" class="form-control">
                                                <option value="">Pilih Objek Wisata</option>
                                                <?php foreach ($wisata as $tp) : ?>
                                                    <option value="<?php echo $tp->id_wisata ?>">
                                                        <?php echo $tp->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?php if ($dt->opsi == 'Dengan Sopir') { ?>
                                            <div class="form-group col-md-6">
                                                <label>Lokasi Penjemputan (Opsional)</label>
                                                <input type="text" name="lokasi_penjemputan" class="form-control" placeholder="Masukan lokasi penjemputan">
                                            </div>
                                        <?php } else { ?>
                                            <div class="form-group col-md-6">
                                                <label>Lokasi Penjemputan (Opsional)</label>
                                                <input type="text" name="lokasi_penjemputan" class="form-control" placeholder="Masukan lokasi penjemputan" disabled>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <button type="submit" class="btn btn-info mt-3">Simpan Pesanan</button>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    </div>