<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formatif</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    $sql_k = "SELECT `id_berita`, `judul`, `isi`, `tanggal`,`cover` FROM `berita` WHERE `id_berita`='" . $_GET['berita'] . "'";
    $query_k = mysqli_query($koneksi,$sql_k);
    while ($data_k =  mysqli_fetch_row($query_k)){
      $id_berita = $data_k[0];
      $judul = $data_k[1];
      $isi = $data_k[2];
      $tanggal = $data_k[3];
      $cover = $data_k[4];
      $tanggal = date('d-m-Y',strtotime($tanggal));
    }
?>  
<section class="hero-wrap hero-wrap-2" style="background-image: url(admin/foto/<?php echo $cover;?>)" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread"><?php echo $judul?></h1>
       <p><a href="index.php?include=berita" class="btn btn-secondary">back</a></p>
     </div>
   </div>
 </div>
</section>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 wrap-about py-5">
                <div class="heading-section pr-md-5 pt-md-5">
                    <h6><span style="color: white"><?php echo $isi?></span></h6>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
</div>



  </footer>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>