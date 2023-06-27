<div class="app-main" id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px">
                    <div class="card-header alert alert-primary">
                        KONFIRMASI BUKTI PEMBAYARAN
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
                            <?php foreach ($pembayaran as $pmb) : ?>
                                <a class="btn btn-success btn-block" href="<?php echo base_url('admin/transaksi/download_pembayaran/' . $pmb->id_rental) ?>"><i class="fa fa-cloud-download"></i> Bukti Pembayaran</a><br><br>
                                <!-- <div class="custom-control custom-switch ml-1">
                                    <input type="hidden" class="custom-control-input" value="<?php echo $pmb->id_rental ?>" name="id_rental">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                                    <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                                </div>

                                <hr>
                                <button type="submit" class="btn btn-primary">Simpan Pembayaran</button> -->

                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal untuk upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Segera Upload Bukti Pembayaran Anda ! </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form group">
                        <label>Upload Bukti Pembayaran</label>
                        <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
                        <input type="file" name="bukti_pembayaran" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-sm btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>