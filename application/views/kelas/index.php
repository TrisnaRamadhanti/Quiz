<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Daftar Kelas</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">

<form action="<?php echo base_url('kelas/cariData')?>" action="GET">
				<div class="form-group">
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>
  <br>

<?php if (isset($results)) { ?>


    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>
          <a class="btn btn-primary" href="<?php echo site_url('kelas/create') ?>">
            Tambah
          </a>
        </th>
      </thead>
      <tbody>
        <?php $number = 1; foreach($results as $row) { ?>
        <tr>
          <td>
              <?php echo $number++ ?>
            </a>
          </td>
          <td>
          <a href="<?php echo site_url('kelas/show/'.$row->id_kelas) ?>">
              <?php echo $row->nama_kelas ?>
            </a>
          </td>
          <td>
            <?php echo form_open('kelas/hapus/'.$row->id_kelas)  ?>
            <a class="btn btn-info" href="<?php echo site_url('kelas/edit/'.$row->id_kelas) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php echo $links ?>
  <?php } 
  else { ?>
  <div> Tidak ada data</div>
  <?php } ?>
    

  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>