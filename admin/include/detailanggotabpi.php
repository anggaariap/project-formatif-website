<?php 
if(isset($_GET['data'])){
	$id_anggota = $_GET['data'];
	
    //get data 
	$sql_d = "SELECT `id_anggota`,`id_departemen`,`id_periode`, `nama_anggota`,`foto_anggota`,`jabatan`,`status` FROM `anggota`
  WHERE `id_anggota` = '$id_anggota'";
  
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id_anggota= $data_d[0];
        $id_departemen= $data_d[1];
        $id_periode = $data_d[2];
        $nama_anggota = $data_d[3];
        $foto_anggota= $data_d[4];
        $jabatan= $data_d[5];
        $status = $data_d[6];
    }
}
?>


<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Anggota</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=bpi">BPI</a></li>
              <li class="breadcrumb-item active">Detail Anggota BPI</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title" style="margin-top:5px;"><i class=""></i> <b>Profil Anggota</b></h3>
                <div class="card-tools">
           
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td width="20%"><strong>Foto<strong></td>
                        <td width="80%">
                          <img src="foto/<?php echo $foto_anggota;?>" class="img-fluid" width="300px;">
                        </td>
                      </tr>                       

                      <tr>
                        <td width="20%"><strong>Nama Anggota <strong></td>
                        <td width="80%"><?php echo $nama_anggota;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Departemen<strong></td>
                        <td width="80%"><?php echo "Badan Pengurus Inti";?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>jabatan<strong></td>
                        <td width="80%"><?php echo $jabatan;?></td>
                      </tr> 
                      <tr>
                        <td ><strong>Proker <strong></td>
                        <td>
                          <ul><?php 
                            $sql_h = "SELECT `proker`.`id_departemen`,`proker`.`nama_proker` FROM `proker`
                            INNER JOIN `departemen` ON `proker`.`id_departemen`=`departemen`.`id_departemen`
                            WHERE `proker`.`id_departemen`='$id_departemen'";
                            $query_h = mysqli_query($koneksi,$sql_h);
                            while($data_h = mysqli_fetch_row($query_h)){
                            $id_proker = $data_h[0];
                            $proker= $data_h[1];
                            ?>
                            <li><?php echo $proker;?></li>
                            <?php }?>
                          </ul>
                         </td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Periode<strong></td>
                        <td width="80%"><?php 
                        if($id_periode == 1){
                            echo "2020";
                        }else if($id_periode == 2){
                            echo "2021";
                        }else if($id_periode == 3){
                            echo "2022";
                        }else if($id_periode == 4){
                        echo "2023 ";
                        }else if($id_periode == 5){
                            echo "2024";
                        }?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Status<strong></td>
                        <td width="80%"><?php echo $status;?></td>
                      </tr> 
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->