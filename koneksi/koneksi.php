<?php
$koneksi = mysqli_connect("localhost","root","","formatif_db");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
