<div class="app-main" id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card" style="margin-top: 10px">
                    <div class="card-header alert-primary text-white">
                        INVOICE PEMBAYARAN ANDA
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php foreach ($transaksi as $tr) : ?>
                                <tr>
                                    <th>Merk Mobil</th>
                                    <td>:</td>
                                    <td><?php echo $tr->merk ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rental</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_rental ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_kembali ?></td>
                                </tr>
                                <tr>
                                    <th>Harga Sewa Kendaraan</th>
                                    <td>:</td>
                                    <td><?php echo number_format($tr->harga) ?></td>
                                </tr>
                                <tr>
                                    <?php
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jmlhari = abs(($x - $y) / (60 * 60 * 24));
                                    ?>
                                    <th>Jumlah Hari Sewa</th>
                                    <td>:</td>
                                    <td><?php echo $jmlhari ?> Day</td>
                                </tr>
                                <tr>
                                    <th>Paket Objek Wisata</th>
                                    <td>:</td>
                                    <td>
                                        <?php if ($tr->nama_wisata == null) { ?>
                                            -
                                        <?php } else { ?>
                                            <?php echo $tr->nama_wisata ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Harga Paket Wisata</th>
                                    <td>:</td>
                                    <td>
                                        <?php if ($tr->harga_paket == null) { ?>
                                            -
                                        <?php } else { ?>
                                            <?php echo number_format($tr->harga_paket) ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr class="text-primary">
                                    <th>Jumlah Pembayaran</th>
                                    <td>:</td>
                                    <td><button class="btn btn-sm btn-danger">Rp. <?php echo number_format($tr->harga * $jmlhari + $tr->harga_paket) ?></button></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a class="btn btn-sm btn-info" href="<?php echo base_url('customer/transaksi/cetak_invoice/' . $tr->id_rental) ?>">Cetak Tiket Pesanan</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card" style="margin-top: 10px">
                    <div class="card-header alert alert-primary text-white">
                        INFORMASI PEMBAYARAN
                    </div>
                    <div class="card-body">
                        <p class="text-danger">Silahkan lakukan pembayaran melalui ATM transfer, dengan nomor rekening di bawah ini : </p>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="<?php echo base_url('assets/mandiri.png') ?>" width="20%" alt="" class="src"> Bank Mandiri / 170021698 (<font color="red">a/n. FlashFast</font>)</li>
                            <li class="list-group-item"><img src="<?php echo base_url('assets/bca.png') ?>" width="15%" alt="" class="src"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank BCA / 270021695 (<font color="red">a/n. FlashFast</font>)</li>
                            <li class="list-group-item"><img src="<?php echo base_url('assets/bni.png') ?>" width="13%" alt="" class="src"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bank BNI / 370469687 (<font color="red">a/n. FlashFasts</font>)</li>
                        </ul>

                        <?php
                        //kalau bukti pembayarannya customer blm upload
                        if (empty($tr->bukti_pembayaran)) { ?>
                            <a class="btn btn-sm btn-danger mt-2" style="width: 100%" href="<?php echo base_url('customer/transaksi/uploadbukti/' . $tr->id_rental) ?>">Unggah Bukti Pembayaran</a>
                        <?php } elseif ($tr->status_pembayaran == '0') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-warning">Menunggu Konfirmasi</button>
                        <?php } elseif ($tr->status_pembayaran == '1') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-primary">Pembayaran Selesai</button>
                        <?php } ?>
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