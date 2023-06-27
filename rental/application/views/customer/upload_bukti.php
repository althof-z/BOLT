    <div class="app-main" id="main">
         <div class="container-fluid">
              <div class="row">
                   <div class="col-md-12 m-b-30 mt-3">
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                             <div class="card-header alert-primary text-white">
                                  INVOICE PEMBAYARAN ANDA
                             </div>
                        </div>
                        <!-- end page title -->
                   </div>
              </div>
              <!-- end row -->
              <!-- begin row -->
              <div class="row">
                   <?php foreach ($bukti as $dt) : ?>
                        <div class="col-xl-12">
                             <div class="card card-statistics">
                                  <div class="card-header">
                                       <div class="card-heading">
                                            <div class="alert border-1 alert-danger bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                                                 <strong>Perhatian</strong> Silahkan unggah bukti pembayaran anda, bukti anda akan di validasi terlebih dahulu dengan pihak penyedia jasa layanan rental!
                                            </div>
                                       </div>
                                  </div>
                                  <div class="card-body">
                                       <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                 <div class="col-md-12">
                                                      <div class="form-group">
                                                           <label>Unggah Bukti Pembayaran</label>
                                                           <input type="hidden" name="id_rental" class="form-control" value="<?php echo $dt->id_rental ?>">
                                                           <input type="file" name="bukti_pembayaran" class="form-control">
                                                      </div>
                                                 </div>
                                       </form>
                                       <button type="submit" class="btn btn-info mt-3">Simpan Bukti</button>
                                  </div>
                             </div>
                        </div>
                   <?php endforeach; ?>
              </div>
              <!-- end row -->
         </div>
         <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    </div>