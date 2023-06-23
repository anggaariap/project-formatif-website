
<!-- deskripsi proker-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Departemen <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread">MINBAK</h1>
       <p><a href="index.php" class="btn btn-secondary">back</a></p>
     </div>
   </div>
 </div>
</section>
<img style="float: right; padding: 70px 150px 0px 0px;" src="./images/minbak.png"/>
        <section id= departemen>
        <div class="row justify-content-center col-md-7 wrap-about py-5">
        <div class="heading-section text-center pr-md-1 pt-md-5 ">
        <span class="subheading"><h2 class="mb-5">MINAT DAN BAKAT</h2></span>
        <h4>MINBAK merupakan departemen yang mewadahi serta  mengembangkan softskill dan hardskill Mahasiswa Teknologi Informasi dan Komputer.</h4>
        </div>
    </section>
        <section>        
            <div class="row justify-content-center col-md-7 wrap-about py-5">
            <div class="heading-section text-center pr-md-5 pt-md-5 ">
                <span class="subheading"></span>
                <h2 class="mb-4"></h2>
                <p></p>
</div>
</section>

<!-- proker -->
<section class="ftco-section testimony-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
        <span class="subheading">Kabinet Harmoni Citra</span>
        <h2>Program Kerja</h2>
      </div>
    </div>
   
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
        <?php 
                  $sql_k = "SELECT `proker`.`id_proker`,`proker`.`nama_proker`,`proker`.`deskripsi_proker` FROM `proker`
                  INNER JOIN `departemen` ON `proker`.`id_departemen`=`departemen`.`id_departemen` 
                  WHERE `departemen`.`nama_departemen`= 'MINBAK' ORDER BY `proker`.`nama_proker` ";
                
                  
                  $query_k = mysqli_query($koneksi,$sql_k);
                  $no = 1;
                   while($data_k = mysqli_fetch_row($query_k)){
                  $id_proker = $data_k[0];
                  $nama_proker = $data_k[1];
                  $deskripsi_proker = $data_k[2];
                ?>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(./images/minbak.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
               
                <p><?php echo $deskripsi_proker;?></p>
                <p class="name"><?php echo $nama_proker;?></p>
                <span class="position"></span>
      </div>
    </div>
  </div>
  <?php $no++; }?> 
</section>

<!-- slide -->

<section>
  
	<div class="row justify-content-center pb-5 mb-3" >
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading"></span>
					<h2>Tim Kami</h2>
				</div>

	<div class="slide-container swiper">
  
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                <?php
                  $sql_k = "SELECT `anggota`.`id_anggota`,`anggota`.`nama_anggota`,`anggota`.`foto_anggota`,`anggota`.`jabatan`,`anggota`.`status`,`periode`.`tahun_periode` FROM `anggota`INNER JOIN `periode` ON `anggota`.`id_periode` = `periode`.`id_periode`
                  INNER JOIN `departemen` ON `anggota`.`id_departemen`=`departemen`.`id_departemen` 
                  WHERE `departemen`.`nama_departemen`= 'MINBAK'";
                  $sql_k .= " ORDER BY `anggota`.`nama_anggota`";
                          
                  $query_k = mysqli_query($koneksi,$sql_k);
                  $no = 1;
                    while($data_k = mysqli_fetch_row($query_k)){
                      $id_anggota = $data_k[0];
                      $nama_anggota = $data_k[1];
                      $foto_anggota = $data_k[2];
                      $jabatan = $data_k[3];
                      $status = $data_k[4];
                      $periode = $data_k[5];

                ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="admin/foto/<?php echo $foto_anggota;?>" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><?php echo $nama_anggota;?></h2>
                            <p class="description"><strong>Jabatan :</strong> <?php echo $jabatan;?></p>
                            <p class="description"><strong>Status  :</strong> <?php echo $status;?></p>
                            <p class="description"><strong>Periode :</strong> <?php echo $periode;?></p>
                        </div>  

                    </div>
                    <?php $no++; }?> 

                </div>

            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>

        </div>
</section>
	<!-- end slide -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>




