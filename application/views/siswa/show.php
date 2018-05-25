<!-- pegawai/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Show Data Siswa</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <?php echo form_hidden('NIS', $data->NIS) ?>

    <div class="form-group">
      <label for="Nama">Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama" 
      value="<?php echo $data->nama ?>" readonly>
    </div>

    <div class="form-group">
      <label for="Nama">Umur</label>
      <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur" 
      value="<?php echo $data->umur ?>" readonly>
    </div>
    
    <div class="form-group">
      <label for="Nama">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" 
      value="<?php echo $data->alamat ?>" readonly>
    </div>

    <div class="form-group">
      <label for="Nama">Kontak</label>
      <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan alamat" 
      value="<?php echo $data->no_telpn ?>" readonly>
    </div>
    
    <div class="form-group">
    <label>Jurusan </label>
                  <select class="form-control" name="kode_jurusan" id="kode_jabatan" readonly>
                  <option selected> 
                  <?php 
                    foreach($kelas as $k) 
                    {
                      if ($k->id_kelas == $data->kode_jurusan)
                      {
                        echo $k->nama_kelas;
                      }
                    }?>                  
                  </select>
    </div>

    <a class="btn btn-info" href="<?php echo base_url('siswa/') ?>">Kembali</a>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>