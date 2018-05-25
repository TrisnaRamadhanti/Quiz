<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Daftar Siswa</legend>
   
  

  <a class="btn btn-primary" href="<?php echo site_url('kelas/') ?>">
            Kembali
  </a>

  <div class="col-xs-12 col-sm-12 col-md-12">
  

  <br>

<?php //if (isset($cari)) { ?>


    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Nama kelas</th>
         
        </th>
      </thead>
      <tbody>
        <?php if(count($cari) > 0 ) {
        $number = 1; foreach($cari as $row) { ?>
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
            <?php echo form_open('siswa/hapus/'.$row->id_kelas)  ?>
            <a class="btn btn-info" href="<?php echo site_url('siswa/edit/'.$row->id_kelas) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
          </td>
        </tr>
        <?php }
        } else { echo "Data Tidak Ada";} ?>
      </tbody>
    </table>
    <?php //echo $links ?>
  <?php 
  //else { ?>
  <div> </div>
  <?php //} ?>
    

  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>