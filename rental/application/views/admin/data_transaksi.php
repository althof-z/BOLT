  <div class="app-main" id="main">
      <!-- begin container-fluid -->
      <div class="container-fluid">
          <!-- begin row -->
          <div class="row">
              <div class="col-md-12 m-b-30">
                  <!-- begin page title -->
                  <div class="d-block d-sm-flex flex-nowrap align-items-center">
                      <div class="page-title mb-2 mb-sm-0">
                          <h1 class="text-purple">TRANSAKSI PESANAN</h1>
                      </div>
                      <div class="ml-auto d-flex align-items-center">
                          <nav>
                              <ol class="breadcrumb p-0 m-b-0">
                                  <li class="breadcrumb-item">
                                      <a href="<?= base_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                  </li>
                                  <li class="breadcrumb-item active text-primary" aria-current="page">Transaksi Pesanan</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
                  <!-- end page title -->
              </div>
          </div>
          <!-- end row -->
          <!-- begin row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="card card-statistics">
                      <div class="card-body">
                          <div class="datatable-wrapper table-responsive">
                              <table id="datatable" class="display compact table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Customer</th>
                                          <th>Kendaraan</th>
                                          <th>Teknis Rental</th>
                                          <th>Estimasi Pinjam</th>
                                          <th>Estimasi Kembali</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Harga Kendaraan</th>
                                          <th>Jumlah Hari Sewa</th>
                                          <th>Denda</th>
                                          <th>Lokasi Penjemputan</th>
                                          <th>Objek Wisata</th>
                                          <th>Harga Paket Wisata</th>
                                          <th>Total Bayar</th>
                                          <th>Status Pengembalian</th>
                                          <th>Status Rental</th>
                                          <th>Cek Pembayaran</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($transaksi as $tr) :
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
                                                  <?php if ($tr->lokasi_penjemputan == null) { ?>
                                                      <center>-</center>
                                                  <?php } else { ?>
                                                      <?php echo $tr->lokasi_penjemputan ?>
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

                                              <td><?php
                                                    if ($tr->status_rental == "Belum Selesai") {
                                                        echo "Belum Selesai";
                                                    } else {
                                                        echo "Sudah Selesai";
                                                    }
                                                    ?>
                                              </td>

                                              <td>
                                                  <center>
                                                      <?php
                                                        if (empty($tr->bukti_pembayaran)) { ?>
                                                          <button class="btn btn-sm btn-secondary"><i class="fe fe-clock"></i> Waiting Payment</button>
                                                      <?php } else { ?>
                                                          <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>"><i class="fe fe-check-circle"></i> Paid</a>
                                                      <?php } ?>
                                                  </center>
                                              </td>

                                              <td>
                                                  <?php
                                                    if ($tr->status_pembayaran == "1") {
                                                        echo "-";
                                                    } else { ?>
                                                      <div class="row">
                                                          <a class="btn btn-sm btn-info ml-3" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>">
                                                              <i class='fa fa-check'></i></a>
                                                          <a class="btn btn-sm btn-danger ml-3" href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_rental) ?>">
                                                              <i class='fa fa-times'></i></a>
                                                      </div>
                                                  <?php } ?>
                                              </td>
                                          </tr>
                                      <?php endforeach; ?>
                                  </tbody>
                              </table>
                          </div>
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

  <!-- Vertical Center Modal -->
  <div class="modal fade" id="verticalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="verticalCenterTitle">TAMBAH KENDARAAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
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
                              <input type="text" name="merk" autocomplete="off" class="form-control" placeholder="eg : Toyota Avanza" required="">
                              <?php echo form_error('merk', '<div class="text-small text-danger">', '</div') ?>
                          </div>
                          <div class="form-group col-md-6">
                              <label>No. Plat</label>
                              <input type="text" name="no_plat" autocomplete="off" class="form-control" placeholder="eg : B 6628 WGF" required="">
                              <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div') ?>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Warna</label>
                              <input type="text" name="warna" autocomplete="off" class="form-control" placeholder="eg : Hitam Metalic" required="">
                              <?php echo form_error('warna', '<div class="text-small text-danger">', '</div') ?>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Harga Sewa /Hari</label>
                              <input type="number" name="harga" autocomplete="off" class="form-control" placeholder="eg : Rp 350,000" required="">
                              <?php echo form_error('harga', '<div class="text-small text-danger">', '</div') ?>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Denda</label>
                              <input type="number" name="denda" autocomplete="off" class="form-control" placeholder="eg : Rp 30,000" required="">
                              <?php echo form_error('denda', '<div class="text-small text-danger">', '</div') ?>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Tahun Keluaran Kendaraan</label>
                              <input type="text" name="tahun" autocomplete="off" class="form-control" placeholder="eg : 2018" required="">
                              <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div') ?>
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
                          <div class="form-group col-md-6">
                              <label>Gambar</label>
                              <input type="file" name="gambar" class="form-control">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-info">Simpan Data</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>