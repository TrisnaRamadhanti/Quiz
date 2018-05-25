<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Daftar Siswa</legend>
   
  

  <a class="btn btn-primary" href="<?php echo site_url('siswa/') ?>">
            Kembali
  </a>

  <div class="col-xs-12 col-sm-12 col-md-12">
  

  <br>

<?php //if (isset($cari)) { ?>


    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Umur </th>
        <th>Alamat</th>
        <th>Kontak</th>
        <th>Jurusan</th>
        <th>Aksi</th>
        <th>
         
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
          <a href="<?php echo site_url('siswa/show/'.$row->NIS) ?>">
              <?php echo $row->nama ?>
            </a>
          </td>
          <td>
          
              <?php echo $row->umur ?>
            </a>
          </td>
          <td>
          
              <?php echo $row->alamat ?>
            </a>
          </td>
          <td>
          
              <?php echo $row->no_telpn ?>
            </a>
          </td>
          <td>
          
          <?php 
           foreach($Kelas as $k) 
           {
              if ($row->kode_jurusan == $k->id_kelas)
              {
                
                echo $k->nama_kelas;
             }
            }?>
            </a>
          </td>
          <td>
            <?php echo form_open('siswa/hapus/'.$row->NIS)  ?>
            <a class="btn btn-info" href="<?php echo site_url('siswa/edit/'.$row->NIS) ?>">
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