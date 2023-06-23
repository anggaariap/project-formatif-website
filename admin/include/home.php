  <!-- Content Header (Page header) -->
  
  <section class="content-header ">
    <div class="container-fluid">
        <div align="center">
          <h3><i class="fas fa-user-secret"></i> ADMIN OF FORMATIF WEBSITE <i class="fas fa-user-secret"></i></h3>
      
        </div>
  

    </div><!-- /.container-fluid -->
  </section>
  

        

  <section class="content" >
        <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Daftar Departemen FORMATIF</h3>
        <div class="container-tools">
          <a href="index.php?include=profil" class="btn btn-sm btn-info  float-right" title="profil"><i class="fas fa-user-circle"></i><b> Profil </b></a>
        </div>
      </div>
        
      <div class="card-body">
        <div class="col-sm-12">
            <div class="row">
                <?php 
                $sql_d = "SELECT `d`.`id_departemen`, `d`.`nama_departemen` FROM `departemen` `d`
                ORDER BY `d`.`id_departemen`";
                //echo $sql_b;
                $query_d= mysqli_query($koneksi,$sql_d);
            
                while($data_d = mysqli_fetch_row($query_d)){
                    $id_departemen= $data_d[0];
                    $nama_departemen = $data_d[1];
                    
                    ?>
              <div class="col-md-4">
                <div class="card mb-5 shadow-sm ">
                  <img src="../admin/cover/b.jpg " class="img-fluid" alt="cover" title="cover">
                  <div class="card-body bg-dark">
                    <p class="card-text"><?php 
                    if($id_departemen == 1){
                        echo "<b>Departemen </br> Badan Pengurus Inti </b>";
                    }else if($id_departemen == 2){
                        echo "<b>Departemen</br> Pengembangan Sumber Daya Mahasiswa</b>";
                    }else if($id_departemen == 3){
                        echo "<b>Departemen </br> Kesejahteraan Mahasiswa </b>";
                    }else if($id_departemen == 4){
                        echo "<b>Departemen </br> Perhubungan</b> ";
                    }else if($id_departemen == 5){
                        echo "<b>Departemen </br> Minat dan Bakat</b>";
                    }else if($id_departemen == 6){
                        echo "<b>Departemen </br> Komunikasi Dan Informasi</b>";
                    }?></p>
                    
                    <div class="d-flex justify-content-between align-items-center ">
                      <div class="btn-group" >
                       <a href="index.php?include=<?php 
                        if($id_departemen == 1){
                            echo "bpi";
                        }else if($id_departemen==2){
                            echo "psdm";
                        }else if($id_departemen==3){
                            echo "kesma";
                        }else if($id_departemen==4){
                            echo "perhub";
                        }else if($id_departemen==5){
                            echo "minbak";
                        }else if($id_departemen==6){
                            echo "kominfo";
                        }?>" class="btn btn-primary btn-sm btn-info">Detail </a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <?php }?> 
              </div>
        </div>
            </div>
          </div>
    </section><!-- #daftar departemen -->
