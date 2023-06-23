<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
  }else if($include=="signup"){
    include("include/signup.php");
  }
  else if($include=="signout"){
    include("include/signout.php");
  }//---BPI---
  else if($include=="konfirmasi-tambah-anggota-bpi"){
    include("include/konfirmasitambahanggotabpi.php");
  }else if($include=="konfirmasi-tambah-proker-bpi"){
    include("include/konfirmasitambahprokerbpi.php");
  }else if($include=="konfirmasi-edit-anggota-bpi"){
    include("include/konfirmasieditanggotabpi.php");
  }else if($include=="konfirmasi-edit-proker-bpi"){
    include("include/konfirmasieditprokerbpi.php");
  }//---PSDM---
  else if($include=="konfirmasi-tambah-anggota-psdm"){
    include("include/konfirmasitambahanggotapsdm.php");
  }else if($include=="konfirmasi-edit-proker-psdm"){
    include("include/konfirmasieditprokerpsdm.php");
  }else if($include=="konfirmasi-tambah-proker-psdm"){
    include("include/konfirmasitambahprokerpsdm.php");
  }else if($include=="konfirmasi-edit-anggota-psdm"){
    include("include/konfirmasieditanggotapsdm.php");
  }//---KESMA---
  else if($include=="konfirmasi-tambah-anggota-kesma"){
    include("include/konfirmasitambahanggotakesma.php");
  }else if($include=="konfirmasi-tambah-proker-kesma"){
    include("include/konfirmasitambahprokerkesma.php");
  }else if($include=="konfirmasi-edit-anggota-kesma"){
    include("include/konfirmasieditanggotakesma.php");
  }else if($include=="konfirmasi-edit-proker-kesma"){
    include("include/konfirmasieditprokerkesma.php");
  }//---PERHUB---
  else if($include=="konfirmasi-tambah-anggota-perhub"){
    include("include/konfirmasitambahanggotaperhub.php");
  }else if($include=="konfirmasi-tambah-proker-perhub"){
    include("include/konfirmasitambahprokerperhub.php");
  }else if($include=="konfirmasi-edit-anggota-perhub"){
    include("include/konfirmasieditanggotaperhub.php");
  }else if($include=="konfirmasi-edit-proker-perhub"){
    include("include/konfirmasieditprokerperhub.php");
  }//---MINBAK---
  else if($include=="konfirmasi-tambah-anggota-minbak"){
    include("include/konfirmasitambahanggotaminbak.php");
  }else if($include=="konfirmasi-tambah-proker-minbak"){
    include("include/konfirmasitambahprokerminbak.php");
  }else if($include=="konfirmasi-edit-anggota-minbak"){
    include("include/konfirmasieditanggotaminbak.php");
  }else if($include=="konfirmasi-edit-proker-minbak"){
    include("include/konfirmasieditprokerminbak.php");
  }//---KOMINFO---
  else if($include=="konfirmasi-tambah-anggota-kominfo"){
    include("include/konfirmasitambahanggotakominfo.php");
  }else if($include=="konfirmasi-tambah-proker-kominfo"){
    include("include/konfirmasitambahprokerkominfo.php");
  }else if($include=="konfirmasi-edit-anggota-kominfo"){
    include("include/konfirmasieditanggotakominfo.php");
  }else if($include=="konfirmasi-edit-proker-kominfo"){
    include("include/konfirmasieditprokerkominfo.php");
  }//---berita
  else if($include=="konfirmasi-tambah-berita"){
    include("include/konfirmasitambahberita.php");
  }else if($include=="konfirmasi-edit-berita"){
    include("include/konfirmasieditberita.php");
  }//---user---
  else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasitambahuser.php");
  }else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasiedituser.php");
  }else if($include=="konfirmasi-edit-profil"){
    include("include/konfirmasieditprofil.php");
  }else if($include=="konfirmasi-edit-password"){
    include("include/konfirmasieditpassword.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
      ?>
      <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
          if($include=="home"){
            include("include/home.php");
          }else if($include=="psdm"){
            include("include/psdm.php");
          }else if($include=="bpi"){
            include("include/bpi.php");
          }else if($include=="perhub"){
            include("include/perhub.php");
          }else if($include=="kesma"){
            include("include/kesma.php");
          }else if($include=="minbak"){
            include("include/minbak.php");
          }else if($include=="kominfo"){
            include("include/kominfo.php");
          }//---tambah anggota---
          else if($include=="tambah-anggota-psdm"){
            include("include/tambahanggotapsdm.php");
          }else if($include=="tambah-anggota-bpi"){
            include("include/tambahanggotabpi.php");
          }else if($include=="tambah-anggota-kesma"){
            include("include/tambahanggotakesma.php");
          }else if($include=="tambah-anggota-perhub"){
            include("include/tambahanggotaperhub.php");
          }else if($include=="tambah-anggota-minbak"){
            include("include/tambahanggotaminbak.php");
          }else if($include=="tambah-anggota-kominfo"){
            include("include/tambahanggotakominfo.php");
          }//---tambah proker---
          else if($include=="tambah-proker-bpi"){
            include("include/tambahprokerbpi.php");
          }else if($include=="tambah-proker-psdm"){
            include("include/tambahprokerpsdm.php");
          }else if($include=="tambah-proker-kesma"){
            include("include/tambahprokerkesma.php");
          }else if($include=="tambah-proker-minbak"){
            include("include/tambahprokerminbak.php");
          }else if($include=="tambah-proker-kominfo"){
            include("include/tambahprokerkominfo.php");
          }else if($include=="tambah-proker-perhub"){
            include("include/tambahprokerperhub.php");
          }//---detail anggota---
          else if($include=="detail-anggota-psdm"){
            include("include/detailanggotapsdm.php");
          }else if($include=="detail-anggota-bpi"){
            include("include/detailanggotabpi.php");
          }else if($include=="detail-anggota-kesma"){
            include("include/detailanggotakesma.php");
          }else if($include=="detail-anggota-perhub"){
            include("include/detailanggotaperhub.php");
          }else if($include=="detail-anggota-minbak"){
            include("include/detailanggotaminbak.php");
          }else if($include=="detail-anggota-kominfo"){
            include("include/detailanggotakominfo.php");
          }//---edit anggota---
          else if($include=="edit-anggota-bpi"){
            include("include/editanggotabpi.php");
          }else if($include=="edit-anggota-psdm"){
            include("include/editanggotapsdm.php");
          }else if($include=="edit-anggota-kesma"){
            include("include/editanggotakesma.php");
          }else if($include=="edit-anggota-perhub"){
            include("include/editanggotaperhub.php");
          }else if($include=="edit-anggota-minbak"){
            include("include/editanggotaminbak.php");
          }else if($include=="edit-anggota-kominfo"){
            include("include/editanggotakominfo.php");
          }//---edit proker---
          else if($include=="edit-proker-bpi"){
            include("include/editprokerbpi.php");
          }else if($include=="edit-proker-psdm"){
            include("include/editprokerpsdm.php");
          }else if($include=="edit-proker-kesma"){
            include("include/editprokerkesma.php");
          }else if($include=="edit-proker-minbak"){
            include("include/editprokerminbak.php");
          }else if($include=="edit-proker-perhub"){
            include("include/editprokerperhub.php");
          }else if($include=="edit-proker-kominfo"){
            include("include/editprokerkominfo.php");
          }//---user---
          else if($include=="user"){
            include("include/user.php");
          }else if($include=="tambah-user"){
           include("include/tambahuser.php");
          }else if($include=="edit-user"){
           include("include/edituser.php");
          }else if($include=="detail-user"){
            include("include/detailuser.php");
          }else if($include=="ubah-password"){
            include("include/ubahpassword.php");   
          }else if($include=="profil"){
            include("include/profil.php");   
          }else if($include=="edit-profil"){
            include("include/editprofil.php");   
          }//---berita---
          else if($include=="berita"){
            include("include/berita.php");
          }else if($include=="edit-berita"){
            include("include/editberita.php");
          }else if($include=="detail-berita"){
            include("include/detailberita.php");   
          }else if($include=="tambah-berita"){
            include("include/tambahberita.php");   
          }
          else{
            include("include/home.php");
          }  
          ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
<?php
  	}else{
    //pemanggilan halaman form login
    include("include/login.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
          <?php include("includes/header.php") ?>
          <?php include("includes/sidebar.php") ?>
          <div class="content-wrapper">
          <?php
            //pemanggilan home
            include("include/home.php");
          ?>
          </div>
          <!-- /.content-wrapper -->
          <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
      <?php  
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>
