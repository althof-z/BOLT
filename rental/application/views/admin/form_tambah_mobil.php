<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 mb-1">
                <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                    Silahkan masukan data kendaraan dengan lengkap dan benar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ti ti-close"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-6 m-b-30">
                <div class="card card-statistics h-100 mb-0">
                    <div class="card-header">
                        <h4 class="card-title text-purple">Tambah Merk Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tipe Kendaraan</label>
                                    <select name="kode_type" class="form-control" required="">
                                        <option value="">Pilih Tipe Kendaraan</option>
                                        <?php foreach ($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type ?>">
                                                <?php echo $tp->nama_type ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Jenis Kendaraan</label>
                                    <input type="text" name="merk" autocomplete="off" class="form-control" placeholder="Masukan nama kendaraan" required="">
                                    <?php echo form_error('merk', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Teknis Rental</label>
                                    <select name="opsi" class="form-control">
                                        <option value="">Pilih Teknis Rental</option>
                                        <option value="Dengan Sopir">Dengan Sopir</option>
                                        <option value="Lepas Kunci">Lepas Kunci</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No. Plat</label>
                                    <input type="text" name="no_plat" autocomplete="off" class="form-control" placeholder="Masukan nomor kendaraan" required="">
                                    <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Warna</label>
                                    <input type="text" name="warna" autocomplete="off" class="form-control" placeholder="Masukan warna kendaraan" required="">
                                    <?php echo form_error('warna', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa /Hari</label>
                                    <input type="number" name="harga" autocomplete="off" class="form-control" placeholder="Masukan harga sewa" required="">
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Denda</label>
                                    <input type="number" name="denda" autocomplete="off" class="form-control" placeholder="Opsional">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tahun Keluaran</label>
                                    <input type="text" name="tahun" autocomplete="off" class="form-control" placeholder="Masukan tahun keluaran" required="">
                                    <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required="">
                                        <option value="">Pilih Status</option>
                                        <option value="1">Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end real estate contant -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end app-main -->
</div>
<!-- end app-container -->