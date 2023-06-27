<div class="app-main" id="main">
     <!-- begin container-fluid -->
     <div class="container-fluid">

          <div class="row">
               <div class="col-md-12 mb-1">
                    <div class="alert border-0 alert-primary bg-gradient alert-dismissible fade show border-radius-none" role="alert">
                         Silahkan ubah objek wisata dengan lengkap dan benar.
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
                              <h4 class="card-title text-purple">Ubah Objek Wisata</h4>
                         </div>
                         <div class="card-body">
                              <?php foreach ($wisata as $tp) : ?>
                                   <form method="POST" action="<?php echo base_url('admin/data_wisata/update_wisata_aksi') ?>">
                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                  <label>Nama Objek Wisata</label>
                                                  <input type="hidden" name="id_wisata" value="<?php echo $tp->id_wisata ?>">
                                                  <input type="text" name="nama" autocomplete="off" class="form-control" value="<?php echo $tp->nama ?>">
                                                  <?php echo form_error('nama', '<div class="text-small text-danger">', '</div') ?>
                                             </div>
                                             <div class="form-group col-md-6">
                                                  <label>Harga Paket</label>
                                                  <input type="text" name="harga" autocomplete="off" class="form-control" value="<?php echo $tp->harga ?>" disabled>
                                             </div>
                                             <div class="form-group col-md-6">
                                                  <label>Waktu Buka</label>
                                                  <input type="time" name="buka" autocomplete="off" class="form-control" value="<?php echo $tp->buka ?>">
                                                  <?php echo form_error('buka', '<div class="text-small text-danger">', '</div') ?>
                                             </div>
                                             <div class="form-group col-md-6">
                                                  <label>Waktu Tutup</label>
                                                  <input type="time" name="tutup" autocomplete="off" class="form-control" value="<?php echo $tp->tutup ?>">
                                                  <?php echo form_error('tutup', '<div class="text-small text-danger">', '</div') ?>
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