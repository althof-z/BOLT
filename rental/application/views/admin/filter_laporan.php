<div class="app-main" id="main">
    <!-- begin container-fluid -->
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
            <div class="col-xxl-6 m-b-30">
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
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Filter Data</button>
                        </form>
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