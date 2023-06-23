<?php
  if (isset($_GET['data'])) {
    $id_berita = $_GET['data'];
    $_SESSION ['id_berita'] = $id_berita;

    $sql_k = "SELECT `id_berita`, `judul`, `isi`, `tanggal`,`cover` FROM `berita` WHERE `id_berita`='$id_berita'";
    
    $query_k = mysqli_query($koneksi,$sql_k);
    while ($data_k =  mysqli_fetch_row($query_k)){
      $id_berita = $data_k[0];
      $judul = $data_k[1];
      $isi = $data_k[2];
      $tanggal = $data_k[3];
      $cover = $data_k[4];
      $tanggal = date('d-m-Y',strtotime($tanggal));
    }
  }
?>  
 
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
              <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
              <li class="breadcrumb-item active">Detail Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title" style="margin-top:5px;"><i class=""></i> <b>Data berita </b>"<?php echo $judul?>"</h3>
              </div>
            </div>
              
            
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td width="20%"><strong>Tanggal<strong></td>
                        <td width="80%"><?php echo $tanggal?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Isi Berita<strong></td>
                        <td width="80%"><?php echo $isi?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Cover<strong></td>
                        <td width="80%">
                          <img src="foto/<?php echo $cover?>" class="img-fluid " width="300px;"></td>
                      </tr> 
                    </tbody>
                  </table>  
              </div>
       

    </section>
    <!-- /.content -->