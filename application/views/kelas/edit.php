<!-- pegawai/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Update Data Kelas</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('kelas/update/'.$data->id_kelas); ?>
    <?php echo form_hidden('id_kelas', $data->id_kelas) ?>
    <div class="form-group">
      <label for="Nama">Nama Kelas</label>
      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Nama" 
      value="<?php echo $data->nama_kelas ?>">
    </div>

    <a class="btn btn-info" href="<?php echo site_url('kelas/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>