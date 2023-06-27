<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom: 50px">
        <div class="card-header alert alert-success">
            Invoice Pembayaran Anda
        </div>

        <div class="card-body">
            <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                <label>Upload Bukti Pembayaran</label>
                <input type="file" name="bukti_pembayaran" class="form-control">
                <button class="btn btn-sm btn-success mt-3">Upload Bukti</button>
            </form>
        </div>
    </div>