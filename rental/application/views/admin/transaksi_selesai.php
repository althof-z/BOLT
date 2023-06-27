<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 mb-1">
                <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                    Silahkan masukan data pelanggan dengan lengkap dan benar.
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
                        <h4 class="card-title text-purple">Transaksi Pesanan Selesai</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($transaksi as $tr) : ?>
                            <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
                                <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
                                <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
                                <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $tr->tanggal_pengembalian ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status Pengembalian</label>
                                        <select name="status_pengembalian" class="form-control">
                                            <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                                            <option value="Kembali">Kembali</option>
                                            <option value="Belum Kembali">Belum Kembali</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status Rental</label>
                                        <select name="status_rental" class="form-control">
                                            <option value="<?php echo $tr->status_rental ?>"><?php echo $tr->status_rental ?></option>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Belum Selesai">Belum Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                            </form>
                        <?php endforeach; ?>
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