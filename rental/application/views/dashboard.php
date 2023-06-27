  <header class="container">
  <div class="page-header col-lg-12">
            <!-- <span class="mask bg-gradient-info opacity-4"></span> -->
            <img src="<?php echo base_url('assets/back.PNG')?>" alt="" class="rounded mx-auto d-block"> !>
       </div>
       <div class="container">
            <div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative z-index-2">
                 <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                      <div class="d-flex align-items-center">
                           <i class="fa fa-car fa-2x text-dark" aria-hidden="true"></i>
                           <div class="ms-3">
                                <h6 class="mb-0">
                                     Kendaraan Tersedia
                                </h6>
                                <p class="text-sm mb-0">
                                     <font color="#8A2BE2"><?php echo $active ?></font>
                                </p>
                           </div>
                      </div>
                 </div>
                 <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                      <div class="d-flex align-items-center">
                           <i class="fa fa-car fa-2x text-dark" aria-hidden="true"></i>
                           <div class="ms-3">
                                <h6 class="mb-0">Kendaraan Tidak Tersedia</h6>
                                <p class="text-sm mb-0">
                                     <font color="#8A2BE2"><?php echo $inactive ?></font>
                                </p>
                           </div>
                      </div>
                 </div>
                 <div class="col-lg-4 col-sm-6 mt-2 mb-lg-0 mb-2">
                      <div class="d-flex align-items-center">
                           <i class="fa fa-shopping-bag fa-2x text-dark" aria-hidden="true"></i>
                           <div class="ms-3">
                                <h6 class="mb-0">Riwayat Pesanan</h6>
                                <p class="text-sm mb-0">
                                     <font color="#8A2BE2"><?php echo $done ?></font>
                                </p>
                           </div>
                      </div>
                 </div>
            </div>
       </div>
  </header>

  <!-- daftar kendaraan -->
  <section class="pt-6 pb-4 ">
       <div class="container">
            <div class="row mb-4">
                 <div class="col-12 text-center">
                      <h3 class="mb-5 text-primary" spellcheck="false">
                           DAFTAR MOTOR LISTRIK
                      </h3>
                 </div>
                 <?php foreach ($mobil as $mb) : ?>
                      <div class="col-lg-3 mb-lg-0 mb-4">
                           <div class="card" >
                                <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                     <a href="javascript:;" class="d-block">
                                          <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" style="width: 230px; height:130px" class="img-fluid border-radius-lg shadow">
                                     </a>
                                </div>

                                <div class="card-body pt-3">
                                     <div class="d-flex align-items-center">
                                          <div>
                                               <span class="text-sm"><?php echo $mb->merk ?></span>
                                               <h4 class="card-description font-weight-bolder text-dark mb-4">
                                                    <?php echo $mb->tahun ?>
                                               </h4>
                                          </div>
                                          <div class="ms-auto">
                                               <a href="javascript:;" class="btn btn-link text-dark p-0">
                                                    <i class="fa fa-star text-lg color-white" aria-hidden="true"></i><i class="fa fa-star text-lg" aria-hidden="true"></i><i class="fa fa-star text-lg" aria-hidden="true"></i>
                                               </a>
                                          </div>
                                     </div>
                                     <div class="d-flex align-items-center mb-3">
                                          <h5 class="mb-0 font-weight-bolder"><?php echo number_format($mb->harga) ?></h5>
                                          <h5 class="mb-0 opacity-4 text-sm ms-2">/ Days</h5>
                                     </div>
                                     <?php
                                        if ($mb->status == "1") {
                                             echo anchor('rental/tambah_rental/' . $mb->id_mobil, '<span class="btn btn-success text-primary mb-0">Booking Motor</span>');
                                        } else {
                                             echo "<span class='btn btn-success mb-0 text-success' disabled>Telah Terbooking</span>";
                                        }
                                        ?>
                                </div>
                           </div>
                      </div>
                 <?php endforeach; ?>
            </div>
       </div>
  </section>

  <!-- daftar wisata -->
  <section class="pt-6 pb-4">
       <div class="container">
            <div class="row mb-4">
                 <div class="col-12 text-center">
                      <h3 class="mb-5 text-primary" spellcheck="false">
                           DAFTAR SEPEDA LISTRIK
                      </h3>
                 </div>
                 <?php foreach ($mobil2 as $mb) : ?>
                      <div class="col-lg-3 mb-lg-0 mb-4">
                           <div class="card">
                                <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                     <a href="javascript:;" class="d-block">
                                          <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" style="width: 230px; height:130px" class="img-fluid border-radius-lg shadow">
                                     </a>
                                </div>

                                <div class="card-body pt-3">
                                     <div class="d-flex align-items-center">
                                          <div>
                                               <span class="text-sm"><?php echo $mb->merk ?></span>
                                               <h4 class="card-description font-weight-bolder text-dark mb-4">
                                                    <?php echo $mb->tahun ?>
                                               </h4>
                                          </div>
                                          <div class="ms-auto">
                                               <a href="javascript:;" class="btn btn-link text-dark p-0">
                                                    <i class="fa fa-star text-lg" aria-hidden="true"></i><i class="fa fa-star text-lg" aria-hidden="true"></i><i class="fa fa-star text-lg" aria-hidden="true"></i>
                                               </a>
                                          </div>
                                     </div>
                                     <div class="d-flex align-items-center mb-3">
                                          <h5 class="mb-0 font-weight-bolder"><?php echo number_format($mb->harga) ?></h5>
                                          <h5 class="mb-0 opacity-4 text-sm ms-2">/ Days</h5>
                                     </div>
                                     <?php
                                        if ($mb->status == "1") {
                                             echo anchor('rental/tambah_rental/' . $mb->id_mobil, '<span class="btn btn-success text-primary mb-0">Booking Sepeda</span>');
                                        } else {
                                             echo "<span class='btn btn-success mb-0 text-success' disabled>Telah Terbooking</span>";
                                        }
                                        ?>
                                </div>
                           </div>
                      </div>
                 <?php endforeach; ?>
            </div>
       </div>
  </section>

  <section class="mt-6 py-5 bg-gradient-dark position-relative"
          style="background-image:url(https://wallpaperaccess.com/full/1092587.jpg); background-size: cover; background-position: center center;">
       <span class="mask bg-gradient-dark opacity-8"></span>
       <div class="container position-relative z-index-2">
            <div class="row">
                 <div class="col-md-12 mx-auto text-left">
                      <h3 class="text-white mb-3" spellcheck="false">
                           Tentang Kami</h3>
                      <!-- <p class="text-white">Perusahaan otomotif yang bergerak dibidang jasa penyediaan rental kendaraan mobil dan motor.</p> -->
                      <p>Formed in 2023 <br>by Manusia Kuat For BOLT.</p>
                    </div>

                    <div class="col-md-12 mx-auto ">
                            <a href="https://github.com/FakhrihanLuthfi"><i class="fa fa-github"></i></a>
                            <a href="https://youtu.be/g_XPuwe0HWQ"><i class="fa fa-youtube"></i></a>
                            <a href="https://wa.me/message/PMH77AGB5MZ6B1"><i class="fa fa-whatsapp"></i></a>
                    </div>    
                      
                    <div class="col-lg-12 text-center">
                    <p class="footer__copyright__text">Copyright @2023 | Manusia Kuat</p>
                    </div>
            </div>
       </div>
  </section>
  
 