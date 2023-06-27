  <div class="app-main" id="main">
       <!-- begin container-fluid -->
       <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                 <div class="col-md-12 m-b-30">
                      <!-- begin page title -->
                      <div class="d-block d-sm-flex flex-nowrap align-items-center">
                           <div class="page-title mb-2 mb-sm-0">
                                <h1 class="text-purple">DAFTAR OBJEK WISATA</h1>
                           </div>
                           <div class="ml-auto d-flex align-items-center">
                                <nav>
                                     <ol class="breadcrumb p-0 m-b-0">
                                          <li class="breadcrumb-item">
                                               <a href="<?php echo base_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                          </li>
                                          <li class="breadcrumb-item active text-primary" aria-current="page">Daftar Objek Wisata</li>
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
                                     <a href="<?php echo base_url('admin/data_wisata/tambah_wisata') ?>" class="btn btn-primary mb-2">Tambah Objek Wisata</a>
                                     <table id="datatable" class="display compact table table-striped table-bordered">
                                          <thead>
                                               <tr>
                                                    <th>No</th>
                                                    <th>Nama Objek Wisata</th>
                                                    <th>Harga Paket</th>
                                                    <th>Jam Buka</th>
                                                    <th>Jam Tutup</th>
                                                    <th>Aksi</th>
                                               </tr>
                                          </thead>
                                          <tbody>
                                               <?php
                                                  $no = 1;
                                                  foreach ($wisata as $tp) : ?>
                                                    <tr>
                                                         <td><?php echo $no++ ?></td>
                                                         <td><?php echo $tp->nama ?></td>
                                                         <td><?php echo number_format($tp->harga) ?></td>
                                                         <td><?php echo $tp->buka ?></td>
                                                         <td><?php echo $tp->tutup ?></td>
                                                         <td>
                                                              <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_wisata/update_wisata/' . $tp->id_wisata) ?>"><i class="fe fe-edit"></i></a>
                                                              <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_wisata/delete_wisata/' . $tp->id_wisata) ?>"><i class="fe fe-trash-2"></i></a>
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