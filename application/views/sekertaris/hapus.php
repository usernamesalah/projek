
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Konsulen</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/sekertaris'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/sekertaris'); ?>">Sekertaris</a></li>
            <li class="active">Hapus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Hapus Sekertaris</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Sekertaris</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $sekertaris->nama ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $sekertaris->nip; ?></label>
                    </div>
                  </div>
                </div>
                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/pengguna/sekertaris/delete') . '/' . $sekertaris->id_pengguna
                    ; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/sekertaris'); ?>">Tidak</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
