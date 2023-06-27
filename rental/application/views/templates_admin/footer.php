 <!-- begin footer -->
 <footer class="footer">
     <div class="row">
         <div class="col-12 col-sm-6 text-center text-sm-left">
             <p>&copy; Copyright 2023, By BOLT.</p>
         </div>
     </div>
 </footer>
 <!-- end footer -->
 </div>
 <!-- end app-wrap -->
 </div>
 <!-- end app -->

 <!-- plugins -->
 <script src="<?php echo base_url('assets') ?>/js/vendors.js"></script>

 <!-- custom app -->
 <script src="<?php echo base_url('assets') ?>/js/app.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
 

 <?php
    $pesan = $this->session->flashdata('berhasil');
    if (!empty($pesan)) :
    ?>
     <script>
         $(window).on('load', function() {
             let pesan = "<?= $pesan ?>";
             swal("Successfully", pesan, 'success');
         });
     </script>
 <?php endif; ?>

 <?php
    $pesan = $this->session->flashdata('gagal');
    if (!empty($pesan)) :
    ?>
     <script>
         $(window).on('load', function() {
             let pesan = "<?= $pesan ?>";
             swal("Opss!", pesan, 'error');
         });
     </script>
 <?php endif; ?>
 </body>

 </html>