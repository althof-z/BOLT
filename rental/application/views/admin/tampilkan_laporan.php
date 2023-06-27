<div class="app-main" id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                    Silahkan pilih pencarian berdasarkan tanggal rental dan tanggal kembali.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ti ti-close"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 m-b-30">
                <div class="card card-statistics h-100 mb-0">
                    <div class="card-header">
                        <h4 class="card-title text-purple">Filter Laporan</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Dari Tanggal</label>
                                    <input type="date" name="dari" class="form-control">
                                    <?php echo form_error('dari', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sampai Tanggal</label>
                                    <input type="date" name="sampai" class="form-control">
                                    <?php echo form_error('sampai', '<div class="text-small text-danger">', '</div') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary mt-2"><i class="fa fa-search"></i> Filter Data</button>
                            <a class="btn btn-sm btn-info mt-2" target="_blank" href="<?php echo base_url() . 'admin/laporan/export/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>"><i class="fa fa-file-excel-o"></i> Eksport Laporan</a>
                        </form>
                        <div class="border-top my-4"></div>
                        <h4 class="card-title text-purple">Hasil Pencarian Laporan</h4>
                        <table class="table-responsive table table-bordered table-striped mt-3">
                            <tr>
                                <th>No</th>
                                <th>Customer</th>
                                <th>Kendaraan</th>
                                <th>Teknis Rental</th>
                                <th>Estimasi Pinjam</th>
                                <th>Estimasi Kembali</th>
                                <th>Tanggal Kembali</th>
                                <th>Harga Kendaraan</th>
                                <th>Hari Sewa</th>
                                <th>Denda</th>
                                <th>Objek Wisata</th>
                                <th>Harga Wisata</th>
                                <th>Total Bayar</th>
                                <th>Status Rental</th>
                                <th>Status Bayar</th>
                            </tr>

                            <?php
                            $no = 1;
                            foreach ($laporan as $tr) :
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlhari = abs(($x - $y) / (60 * 60 * 24));
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tr->nama ?></td>
                                    <td><?php echo $tr->merk ?></td>
                                    <td><?php echo $tr->opsi ?></td>
                                    <td><?php echo date('d M Y', strtotime($tr->tanggal_rental));  ?></td>
                                    <td><?php echo date('d M Y', strtotime($tr->tanggal_kembali));  ?></td>
                                    <td><?php if ($tr->tanggal_pengembalian == "0000-00-00") {
                                            echo "-";
                                        } else {
                                            echo date('d M Y', strtotime($tr->tanggal_pengembalian));
                                        } ?>
                                    </td>
                                    <td><?php echo number_format($tr->harga) ?></td>
                                    <td class="text-center"><?php echo $jmlhari ?> Day</td>
                                    <td>
                                        <?php if ($tr->total_denda == 0) { ?>
                                            <center>-</center>
                                        <?php } else { ?>
                                            <?php echo number_format($tr->total_denda) ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($tr->nama_wisata == null) { ?>
                                            <center>-</center>
                                        <?php } else { ?>
                                            <?php echo $tr->nama_wisata ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($tr->harga_paket == null) { ?>
                                            <center>-</center>
                                        <?php } else { ?>
                                            <?php echo number_format($tr->harga_paket) ?>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo number_format($tr->harga * $jmlhari + $tr->total_denda + $tr->harga_paket) ?></td>
                                    <td><?php
                                        if ($tr->status_pengembalian == "Belum Kembali") {
                                            echo "Belum kembali";
                                        } else {
                                            echo "Sudah kembali";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <center>
                                            <?php
                                            if (empty($tr->bukti_pembayaran)) { ?>
                                                <button class="btn btn-sm btn-secondary"><i class="fe fe-clock"></i> Waiting Payment</button>
                                            <?php } else { ?>
                                                <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>" target="_blank"><i class="fe fe-check-circle"></i> Paid</a>
                                            <?php } ?>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
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