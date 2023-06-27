 <style type="text/css">
     table,
     th,
     td {
         border: 1px solid black;
         border-collapse: collapse;

     }

     th,
     td {
         padding: 5px;
         text-align: left;
     }

     table#satu {
         width: 100%;
         background-color: white;
     }

     table#satu tr:nth-child(even) {
         background-color: white;
     }

     table#satu tr:nth-child(odd) {
         background-color: white;
     }

     table#satu th {
         background-color: #9932CC;
         color: white;
     }

     .res {
         overflow-x: auto;
     }
 </style>

 <div class="app-main" id="main">
     <div class="container-fluid">
         <div class="card" style="margin-top: 30px; margin-bottom: 40px">
             <div class="card-header alert alert-primary text-white">
                 RIWAYAT PESANAN ANDA
             </div>
             <span class="p-1"><?php echo $this->session->flashdata('pesan') ?></span>

             <div class="res">
                 <table id="satu">
                     <div class="form-group">
                         <p class="text-primary"><b>Nama Pemesan</b> &nbsp;: <?php echo $this->session->userdata('nama') ?></p>
                         <p class="text-primary"><b>No KTP</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $this->session->userdata('no_ktp') ?></p>
                         <p class="text-primary"><b>Alamat</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $this->session->userdata('alamat') ?></p>
                         <p class="text-primary"><b>Kelamin</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $this->session->userdata('gender') ?></p>
                         <p class="text-primary"><b>No HP</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $this->session->userdata('no_telepon') ?></p>
                     </div>
                     <tr>
                         <th>Tanggal Rental</th>
                         <th>Jenis Kendaraan</th>
                         <th>Pilihan Teknis</th>
                         <th>Lokasi Penjemputan</th>
                         <th>Paket Wisata</th>
                         <th>Status Rental</th>
                         <th>Aksi</th>
                     </tr>

                     <?php $no = 1;
                        foreach ($transaksi as $tr) : ?>
                         <tr>
                             <td><?php echo date('d-M-Y', strtotime($tr->tanggal_rental));  ?></td>
                             <td><?php echo $tr->merk ?> <br> <small><b><?php echo $tr->no_plat ?></b></small><br><small>
                                     Harga : <font color="red"><?php echo number_format($tr->harga) ?></font>
                                 </small></td>
                             <td><?php echo $tr->opsi ?></td>
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
                                 <?php } ?><br>
                                 <small>Harga : <?php if ($tr->harga_paket == null) { ?>
                                         <center>-</center>
                                     <?php } else { ?>
                                         <font color="red"><?php echo number_format($tr->harga_paket) ?></font>
                                     <?php } ?>
                                 </small>
                             </td>
                             <td>
                                 <?php if ($tr->status_rental == "Selesai") { ?>
                                     Rental Selesai
                                 <?php } else { ?>
                                     <a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-primary">Cek Pembayaran</a>
                                 <?php } ?>
                             </td>
                             <td>
                                 <?php
                                    if ($tr->status_rental == 'Belum Selesai') { ?>
                                     <a onclick="return confirm('Apakah anda yakin ingin membatalkan transaksi ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
                                 <?php } else { ?>
                                     <a class="btn btn-sm btn-info" href="<?php echo base_url('customer/transaksi/cetak_invoice/' . $tr->id_rental) ?>">Cetak</a>
                                 <?php } ?>
                             </td>
                         </tr>
                     <?php endforeach; ?>
                 </table>
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
                 <h5 class="modal-title" id="exampleModalLabel">Informasi Pembatalan Transaksi</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form group">
                     <i class="fa fa-info-circle"></i> Maaf, transaksi ini sudah selesai dan tidak bisa dibatalkan.
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Kembali</button>
             </div>
             </form>
         </div>
     </div>
 </div>