  <div class="app-main" id="main">
      <!-- begin container-fluid -->
      <div class="container-fluid">
          <!-- begin row -->
          <div class="row">
              <div class="col-md-12 m-b-30">
                  <!-- begin page title -->
                  <div class="d-block d-sm-flex flex-nowrap align-items-center">
                      <div class="page-title mb-2 mb-sm-0">
                          <h1 class="text-purple">DAFTAR PELANGGAN</h1>
                      </div>
                      <div class="ml-auto d-flex align-items-center">
                          <nav>
                              <ol class="breadcrumb p-0 m-b-0">
                                  <li class="breadcrumb-item">
                                      <a href="<?php echo base_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                  </li>
                                  <li class="breadcrumb-item active text-primary" aria-current="page">Daftar Pelanggan</li>
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
                              <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-2"><i class="fe fe-edit"></i> Tambah Pelanggan</a>
                              <table id="datatable" class="display compact table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Alamat</th>
                                          <th>Kelamin</th>
                                          <th>No Tlp</th>
                                          <th>No KTP</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($customer as $cs) : ?>
                                          <tr>
                                              <td><?php echo $no++ ?></td>
                                              <td><?php echo $cs->nama ?></td>
                                              <td><?php echo $cs->alamat ?></td>
                                              <td><?php echo $cs->gender ?></td>
                                              <td><?php echo $cs->no_telepon ?></td>
                                              <td><?php echo $cs->no_ktp ?></td>
                                              <td><?php echo $cs->username ?></td>
                                              <td><?php echo $cs->password ?></td>
                                              <td>
                                                  <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_customer/update_customer/' . $cs->id_customer) ?>"><i class="fe fe-edit"></i></a>
                                                  <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_customer/delete_customer/' . $cs->id_customer) ?>"><i class="fe fe-trash-2"></i></a>
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