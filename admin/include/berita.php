<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_berita = $_GET['data'];
		//hapus anggota
		$sql_dh = "DELETE from `berita` 
		WHERE `id_berita` = '$id_berita'";
		mysqli_query($koneksi,$sql_dh);
	}
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-file-alt"></i> Berita</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?include=berita"> Berita</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Berita</h3>
        <div class="card-tools">
          <a href="index.php?include=tambah-berita" class="btn btn-info float-right"><i class="fas fa-plus"></i><b> Tambah Berita</b></a>
     
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="col-md-12">
          <form method="post" action="index.php?include=berita">
            <div class="row">
                <div class="col-md-4 bottom-10">
                  <input type="text" class="form-control" id="kata_kunci" name="katakunci" value="">
                </div>
                <div class="col-md-5 bottom-10">
                  <button type="submit" class="btn btn-info"><i class="fas fa-search"></i>&nbsp; Search</button>
                </div>
            </div><!-- .row -->
          </form>
        </div><br>
        <div class="col-sm-12">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="tambahberhasil"){?>
          <div class="alert alert-success" role="alert">Berita Berhasil Ditambahkan</div>
          <?php } else if($_GET['notif']=="editberhasil"){?>
          <div class="alert alert-success" role="alert">Berita Berhasil Diubah</div>
          <?php } else if($_GET['notif']=="hapusberhasil"){?>
          <div class="alert alert-success" role="alert">Berita Berhasil Dihapus</div>
          <?php }?>
        <?php }?>
        </div>
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th width="5%""><center>No</center></th>
              <th width="15%"><center>Judul</center></th>
              <th width="25%"><center>Isi</center></th>
              <th width="15%"><center>Tanggal</center></th>
              <th width="20%"><center>Cover</center></th>
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
          // menampilkan data berita
            $sql_k = "SELECT `id_berita`,`judul`,`isi`,`tanggal`,`cover` FROM `berita`";
            
            if (isset($_POST["katakunci"])){
              $katakunci_buku = $_POST["katakunci"];
              $sql_k .= " WHERE `berita`.`judul` LIKE '%$katakunci_buku%'";
              }


            $sql_k .= " ORDER BY `judul` limit $posisi, $batas ";
            $query_k = mysqli_query($koneksi,$sql_k);
            $no = $posisi+1;
              while($data_k = mysqli_fetch_row($query_k)){
                $id_berita = $data_k[0];
                $judul = $data_k[1];
                $isi = $data_k[2];
                $tanggal = $data_k[3];
                $cover = $data_k[4];
                $tanggal = date('d-m-Y',strtotime($tanggal));
                $isipdk = substr($isi,0,100);
          ?>
            <tr>
              <td align="center"><?php echo $no;?></td>
              <td><?php echo $judul;?></td>
              <td><?php echo $isipdk;?><a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>">(.... baca selengkapnya)</a></td>
              <td align="center"><?php echo $tanggal;?></td>
              <td>
                <img src="foto/<?php echo $cover;?>" class="img-fluid" width="250px;"></td>
              <td align="center">
                
                <a href="index.php?include=edit-berita&data=<?php echo $id_berita;?>" class="btn btn-sm btn-info"  title="Edit"><i class="fas fa-edit"></i></a>
                <a href="index.php?include=detail-berita&data=<?php echo $id_berita;?>" class="btn btn-sm btn-info" title="Detail"><i class="fa fa-eye" title="Detail"></i> </a>
                <a href="index.php?include=berita&aksi=hapus&data=<?php echo $id_berita;?>&notif=hapusberhasil" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-warning" title="Hapus"><i class="fas fa-trash" ></i></a>
  
              </td>
            </tr>
            <?php $no++;}?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <?php
      //hitung jumlah semua data
      $sql_jum = "select `id_berita`, `judul`,`tanggal` `cover` from `berita` ";
      if (isset($_GET["katakunci"])){
        $katakunci = $_GET["katakunci"];
        $sql_jum .= " where `judul` LIKE '%$katakunci%'";
      }
      $sql_jum .= " order by `judul`";
      $query_jum = mysqli_query($koneksi,$sql_jum);
      $jum_data = mysqli_num_rows($query_jum);
      $jum_halaman = ceil($jum_data/$batas);
      ?>
      <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
      <?php 
  if($jum_halaman==0){
    //tidak ada halaman
  }else if($jum_halaman==1){
      echo "<li class='page-item'><a class='page-link'>1</a></li>";
  }else{
      $sebelum = $halaman-1;
      $setelah = $halaman+1;
      if (isset($_POST["katakunci"])){
        $kata_kunci = $_POST["katakunci"];
        if($halaman!=1){
          echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$kata_kunci&halaman=1'>First</a></li>";
          echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$kata_kunci&halaman=$sebelum'>«</a></li>";
        }
        for($i=1; $i<=$jum_halaman; $i++){
          if ($i > $halaman - 5 and $i < $halaman + 5 ) {
            if($i!=$halaman){
                echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$kata_kunci&halaman=$i'>$i</a></li>";
            }else{
                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
            }
          }
        }

          if($halaman!=$jum_halaman){
              echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$kata_kunci&halaman=$setelah'>»</a></li>";
              echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&katakunci=$kata_kunci&halaman=$jum_halaman'>Last</a></li>";
          }
      }else{
        if($halaman!=1){
            echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=1'>First</a></li>";
            echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$sebelum'>«</a></li>";
          }
          for($i=1; $i<=$jum_halaman; $i++){
          
            if($i!=$halaman){
                echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$i'>$i</a></li>";
            }else{
                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
            }
          }

          if($halaman!=$jum_halaman){
              echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$setelah'>»</a></li>";
              echo "<li class='page-item'><a class='page-link' href='index.php?include=berita&halaman=$jum_halaman'>Last</a></li>";
            }
          }
        }?>
      </ul>
      </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->