
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread">Berita</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section">
 <div class="container" id="berita">
  <div class="row">
  <?php
    $batas = 4;
    if(!isset($_GET['halaman'])){
      $posisi = 0;
      $halaman = 1;
    }else{
      $halaman = $_GET['halaman'];
      $posisi = ($halaman-1) * $batas;
    }
    $sql_k = "SELECT `id_berita`, `judul`, `isi`, `tanggal`,`cover` FROM `berita` ORDER BY `judul` limit $posisi, $batas";
    
    $query_k = mysqli_query($koneksi,$sql_k);
    $no = 1;
    while ($data_k =  mysqli_fetch_row($query_k)){
      $id_berita = $data_k[0];
      $judul = $data_k[1];
      $isi = $data_k[2];
      $tanggal = $data_k[3];
      $cover = $data_k[4];
      $tanggal = date('d-m-Y',strtotime($tanggal));
      $isipdk = substr($isi, 0, 100);
?>  
   <div class="col-md-6 col-lg-3">
    <div class="causes causes-2 text-center ftco-animate">
     <a href="" class="img w-100" style="background-image: url(admin/foto/<?php echo $cover;?>)"></a>
     <div class="text p-3">
      <div class="meta mb-2">
        <div><a><?php echo $tanggal;?></a></div>
      </div>
       <h2><a>"<?php echo $judul;?>"</a></h2>
       <p><?php echo $isipdk; ?></p>
       <p><a href="index.php?include=detilberita&berita=<?php echo $id_berita ?>" class="btn btn-light w-100">Read More</a></p>
     </div>
   </div>
 </div>
 <?php $no++; }?> 
</div>
</div>
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
</div>
</section>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


