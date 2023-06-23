<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapusanggota'){
		$id_anggota = $_GET['data'];
		//hapus anggota
		$sql_dh = "DELETE from `anggota` 
		WHERE `id_anggota` = '$id_anggota'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if ($_GET['aksi']=='hapusproker'){
  $id_proker = $_GET['data'];
  //hapus proker 
  $sql_dp = "DELETE from `proker` 
  WHERE `id_proker` = '$id_proker'";
  mysqli_query($koneksi,$sql_dp);
}
}
?>

  <!-- Content Header (Page header) -->
  <section class="content-header ">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-7">
          <h3><i class="fas fa-address-book"></i> Departemen Pengembangan Sumber Daya Mahasiswa </h3>
        </div>
        <div class="col-sm-5">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="index.php?include=psdm"> PSDM</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <!-- Main content anggota -->
  <section class="content ">
    <div class="card card-info">
      <div class="card-header">
          <h3 class="card-title" style="margin-top:5px;"><b> Daftar Anggota PSDM</b> </h3>
        <div class="card-tools">
          <a href="index.php?include=tambah-anggota-psdm" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Anggota</a>
        </div></br>
      </div>

      <!-- /.card-header -->
    <div class="card-body">
      <div class="col-sm-12">
        <div class="col-sm-12">
          <?php if(!empty($_GET['notifanggota'])){?>
            <?php if($_GET['notifanggota']=="tambahanggotaberhasil"){?>
              <div class="alert alert-success" role="alert">Anggota Berhasil Ditambah</div>
            <?php }else if($_GET['notifanggota']=="editanggotaberhasil"){?>
              <div class="alert alert-success" role="alert">Data Anggota Berhasil Diubah</div>
            <?php } else if($_GET['notifanggota']=="hapusanggotaberhasil"){?>
              <div class="alert alert-success" role="alert">Data Anggota Berhasil Dihapus</div>
          <?php }}?>
        </div>
      </div>
      <div class="col-sm-12">
            <div class="col-sm-12">
              <?php if(!empty($_GET['notifproker'])){?>
                <?php if($_GET['notifproker']=="tambahprokerberhasil"){?>
                  <div class="alert alert-success" role="alert">Program Kerja Berhasil Ditambah</div>
                <?php }else if($_GET['notifproker']=="editprokerberhasil"){?>
                  <div class="alert alert-success" role="alert">Data Proker Berhasil Diubah</div>
                <?php } else if($_GET['notifproker']=="hapusprokerberhasil"){?>
                  <div class="alert alert-success" role="alert">Data Berhasil Proker Dihapus</div>
              <?php }}?>
            </div>
          </div>

      <table class="table table-bordered">
        <thead >                  
          <tr>
            <th width="5%"><center>No</center></th>
            <th width="40%">Nama Anggota </th>
            <th width="40%">Jabatan </th>
            <th width="15%"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $batas = 3;
              if(!isset($_GET['halaman'])){
                $posisi = 0;
                $halaman = 1;
              }else{
                $halaman = $_GET['halaman'];
                $posisi = ($halaman-1) * $batas;
              } 
                  
            $sql_k = "SELECT `anggota`.`id_anggota`,`anggota`.`nama_anggota`,`anggota`.`jabatan` FROM `anggota` 
            INNER JOIN `departemen` ON `anggota`.`id_departemen`=`departemen`.`id_departemen` 
            WHERE `departemen`.`nama_departemen`= 'PSDM'";
            $sql_k .= " ORDER BY `anggota`.`nama_anggota` limit $posisi, $batas";
                    
            $query_k = mysqli_query($koneksi,$sql_k);
            $no = $posisi+1;
              while($data_k = mysqli_fetch_row($query_k)){
                $id_anggota = $data_k[0];
                $nama_anggota = $data_k[1];
                $jabatan = $data_k[2];
          ?>

        <tr>
          <td><center><?php echo $no; ?></center></td>
          <td><?php echo $nama_anggota;?></td>
          <td><?php echo $jabatan;?></td>
          <td align="center">
            <a href="index.php?include=edit-anggota-psdm&data=<?php echo $id_anggota;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            <a href="index.php?include=detail-anggota-psdm&data=<?php echo $id_anggota;?>" class="btn btn-xs btn-info" name="detail" value="detail" title="Detail"><i class="fas fa-eye"></i>Detail</a>
            <a href="index.php?include=psdm&aksi=hapusanggota&data=<?php echo $id_anggota;?>&notifanggota=hapusanggotaberhasil" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-xs btn-warning"><i class="fas fa-trash" ></i> Hapus</a>
          </td>
        </tr>
        <?php $no++; }?>           
      </tbody>
    </table>
  </div>

    <!-- /.card-body -->
      <?php
    //hitung jumlah semua data 
        $sql_jum = "SELECT `anggota`.`id_anggota`,`anggota`.`nama_anggota`,`anggota`.`jabatan` FROM `anggota` 
        INNER JOIN `departemen` ON `anggota`.`id_departemen`=`departemen`.`id_departemen` 
        WHERE `departemen`.`nama_departemen`= 'PSDM' ORDER BY `anggota`.`nama_anggota`"; 
        $query_jum = mysqli_query($koneksi,$sql_jum);
        $jum_data = mysqli_num_rows($query_jum);
        $jum_halaman = ceil($jum_data/$batas);
      ?>

        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
          <?php 
          if ($jum_halaman == 0) {
            //tidak ada halaman
            } else if ($jum_halaman == 1) {
            echo "<li class='page-item'><a class='page-link'>1</a></li>";
            } else {
            $sebelum = $halaman - 1;
            $setelah = $halaman + 1;
            if ($halaman != 1) {
              echo "<li class='page-item'><a class='page-link' href='index.php?include=psdm&halaman=1'>First</a></li>";
              echo "<li class='page-item'><a class='page-link' href='index.php?include=psdm&halaman=$sebelum'>«</a></li>";
              }
            for ($i = 1; $i <= $jum_halaman; $i++) {
              if ($i != $halaman) {
                echo "<li class='page-item'><a class='page-link' href='index.php?include=psdm&halaman=$i'>$i</a></li>";
                }else{
                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                }
              }
            if ($halaman != $jum_halaman) {
              echo "<li class='page-item'><a class='page-link' href='index.php?include=psdm&halaman=$setelah'>»</a></li>";
              echo "<li class='page-item'><a class='page-link' href=index.php?include=psdm&halaman=$jum_halaman'>Last</a></li>";
              }
            }?>
          </ul>
        </div>
    </div><!-- /.card -->

      <!-- Main content proker-->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><b> Daftar Program Kerja PSDM </b> </h3>
          <div class="card-tools">
            <a href="index.php?include=tambah-proker-psdm" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Program Kerja</a>
          </div>
        </div>
      <!-- /.card-header -->
     
        <div class="card-body">

            <table class="table table-bordered">
              <thead>                  
                <tr>
                  <th width="5%"><center>No</center></th>
                  <th width="40%"> Program Kerja </th>
                  <th width="40%"> Deskripsi </th>
                  <th width="15%"><center>Aksi</center></th>
                </tr>
              </thead>
                <tbody>
                  <?php 
                    $sql_k = "SELECT `proker`.`id_proker`,`proker`.`nama_proker`,`proker`.`deskripsi_proker` FROM `proker`
                    INNER JOIN `departemen` ON `proker`.`id_departemen`=`departemen`.`id_departemen` 
                    WHERE `departemen`.`nama_departemen`= 'PSDM' ORDER BY `proker`.`nama_proker` ";
                 
                    
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = 1;
                  while($data_k = mysqli_fetch_row($query_k)){
                    $id_proker = $data_k[0];
                    $nama_proker = $data_k[1];
                    $deskripsi_proker = $data_k[2];
                  ?>
                  <tr>
                    <td><center><?php echo $no; ?></center></td>
                    <td><?php echo $nama_proker;?></td>
                    <td><?php echo $deskripsi_proker;?></td>
                    <td align="center">
                      <a href="index.php?include=edit-proker-psdm&data=<?php echo $id_proker;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                      <a href="index.php?include=psdm&aksi=hapusproker&data=<?php echo $id_proker;?>&notifproker=hapusprokerberhasil" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-xs btn-warning"><i class="fas fa-trash" ></i> Hapus</a>
                    </td>
                  </tr>
                  <?php $no++; }?>           
                </tbody>
              </table>
            </div>
           </ul>
        </div>
        </div>          
    </section>

    