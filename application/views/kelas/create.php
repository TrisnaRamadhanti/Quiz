<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Jurusan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('kelas/tambah'); ?>

    <div class="form-group">
      <label for="Kode">ID Jurusan</label>
      <input type="text" class="form-control" id="id_kelas" name="ied_kelas" placeholder="Masukkan ID Jurusan">
    </div>

    <div class="form-group">
      <label for="Nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>

    <a class="btn btn-info" href="<?php echo site_url('kelas/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>