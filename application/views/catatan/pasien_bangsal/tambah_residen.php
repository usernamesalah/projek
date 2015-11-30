
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Buku Harian</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Catatan Harian</li>
            <li class="active">Buku Harian</li>
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Data Buku Harian</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pasien_bangsal/insert'); ?>">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal');?>
                    </div>
                  <?php endif; ?>
                  
                  <div class="form-group">
                    <label for="tgl_mulai" class="col-md-3 control-label">Tanggal Mulai*</label>
                    <div class="col-md-3">
                      <input class="form-control tanggal" id="tgl_mulai" name="tgl_mulai" placeholder="Tanggal Mulai" value="<?php echo date("d-m-Y"); ?>" required>
                    </div>
                    <label for="jam_mulai" class="col-md-3 control-label">Jam Mulai*</label>
                    <div class="col-md-3">
                      <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Jam Mulai" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_selesai" class="col-md-3 control-label">Tanggal Selesai*</label>
                    <div class="col-md-3">
                      <input class="form-control tanggal" id="tgl_selesai" name="tgl_selesai" placeholder="Tanggal Selesai" required>
                    </div>
                    <label for="jam_siap" class="col-md-3 control-label">Jam Selesai*</label>
                    <div class="col-md-3">
                      <input type="time" class="form-control" id="jam_siap" name="jam_siap" placeholder="Jam Selesai" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="modul" class="col-md-3 control-label">Kegiatan*</label>
                    <div class="col-md-9">
                      <select id='modul' name='modul' class='form-control chosen-select' data-placeholder='Pilih Kegiatan' required>
                        <option></option>
                        <option value='Morning Report'>Morning Report</option>
                        <option value='Tugas OK Elektif'>Tugas OK Elektif</option>
                        <option value='Visite Preoperatif'>Visite Preoperatif</option>
                        <option value='Diskusi Preoperatif'>Diskusi Preoperatif</option>
                        <option value='Tugas Jaga'>Tugas Jaga</option>
                        <option value='Belajar Mandiri'>Belajar Mandiri</option>
                        <option value='ICU/HCU'>ICU/HCU</option>
                        <option value='Perkuliahan'>Perkuliahan</option>
                        <option value='Emergency Resusitasi'>Emergency Resusitasi</option>
                        <option value='Poliklinik'>Poliklinik</option>
                        <option value='Pelayanan Nyeri'>Pelayanan Nyeri</option>
                        <option value='Pelayanan Sedasi'>Pelayanan Sedasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="catatan_residen" class="col-md-3 control-label">Catatan Residen</label>
                    <div class="col-md-9">
                      <textarea id="catatan_residen" name="catatan_residen" class="form-control" rows="3" placeholder="Catatan residen..."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="id_konsulen" class="col-md-3 control-label">Konsulen*</label>
                    <div class="col-md-9">
                      <select id='id_konsulen' name='id_konsulen' class='form-control chosen-select' data-placeholder='Pilih Konsulen' required>
                        <option></option>
                        <?php foreach ($list_konsulen as $konsulen) {
                          echo "<option value='" . $konsulen->id . "'>" . $konsulen->nama_konsulen . "</option>\n";
                        } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pasien_bangsal/daftar'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->