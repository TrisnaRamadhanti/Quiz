<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Siswa</legend>
  <div class="col-xs-45 col-sm-45 col-md-45">
  <?php echo form_open('siswa/tambah'); ?>

    <div class="form-group">
      <label for="Id">Nomor Induk Siswa</label>
      <input type="text" class="form-control" id="NIS" name="NIS" placeholder="Masukkan NIS">
    </div>

    <div class="form-group">
      <label for="Nama">Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama">
    </div>

    <div class="form-group">
      <label for="Nama">Umur</label>
      <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan umur">
    </div>

    <div class="form-group">
      <label for="Nama">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
    </div>
    
    <div class="form-group">
      <label for="Nama">Kontak</label>
      <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan no telpon">
    </div>

    <div class="form-group">
    <label>Kelas </label>
                  <select class="form-control" name="kode_kelas" id="kode_kelas">
                  <option selected> -- Pilih Kelas -- </option>
                  <?php foreach($Kelas as $k){ ?>
                  <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?>   </option>
                  <?php } ?>
                  </select>
    </div>
    
    <a class="btn btn-info" href="<?php echo site_url('siswa/') ?>">Kembali</a>
    <button type="submit" name="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>