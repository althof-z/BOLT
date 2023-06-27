  <div class="app-main" id="main">
      <!-- begin container-fluid -->
      <div class="container-fluid">
          <!-- begin row -->
          <div class="row">
              <div class="col-md-12 m-b-30">
                  <!-- begin page title -->
                  <div class="d-block d-sm-flex flex-nowrap align-items-center">
                      <div class="page-title mb-2 mb-sm-0">
                          <h1 class="text-purple">DAFTAR KENDARAAN</h1>
                      </div>
                      <div class="ml-auto d-flex align-items-center">
                          <nav>
                              <ol class="breadcrumb p-0 m-b-0">
                                  <li class="breadcrumb-item">
                                      <a href="<?php echo base_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                  </li>
                                  <li class="breadcrumb-item active text-primary" aria-current="page">Daftar Kendaraan</li>
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
                              <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-2"><i class="fe fe-edit"></i> Tambah Kendaraan</a>
                              <table id="datatable" class="display compact table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Foto</th>
                                          <th>Tipe</th>
                                          <th>Merk</th>
                                          <th>Opsi</th>
                                          <th>No Plat</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($mobil as $mb) : ?>
                                          <tr>
                                              <td><?php echo $no++ ?></td>
                                              <td>
                                                  <img width="60px" src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>">
                                              </td>
                                              <td><?php echo $mb->kode_type ?></td>
                                              <td><?php echo $mb->merk ?></td>
                                              <td><?php echo $mb->opsi ?></td>
                                              <td><?php echo $mb->no_plat ?></td>
                                              <td>
                                                  <?php
                                                    if ($mb->status == "0") {
                                                        echo "<span class='badge badge-danger'> Tidak Tersedia
                                                    </span> ";
                                                    } else {
                                                        echo "<span class='badge badge-primary'> Tersedia
                                                    </span> ";
                                                    }
                                                    ?>
                                              </td>
                                              <td>
                                                  <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_mobil/update_mobil/' . $mb->id_mobil) ?>"><i class="fe fe-edit"></i></a>
                                                  <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_mobil/hapus_mobil/' . $mb->id_mobil) ?>"><i class="fe fe-trash-2"></i></a>
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