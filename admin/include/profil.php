<?php 
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select id_user,nama, email,foto,username,level from user
 where id_user='$id_user'";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
  $id_user = $data[0];
  $nama = $data[1];
  $email = $data[2];
  $foto = $data[3];
  $username = $data[4];
  $level = $data[5];
}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Profil</h3>
          </div>
  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li  class="breadcrumb-item"><a href="index.php?include=profil">Profil</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card card-info">
              <div class="card-header">
              <h3 class="card-title"style="margin-top:5px;"><i class="far fa-user-circle"></i><strong> Profil Anda </strong></h3>
              <div class="card-tools">
              <a href="index.php?include=edit-profil&data=<?php echo $id_user;?>" title="Edit" name="aksi" value="edit" class="btn btn-xs btn-info"><i class="fas fa-edit"></i>Edit</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12"> 
                <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                  <?php }?>
                  <?php }?>
                </div> 
                <table class="table table-bordered ">
                    <tbody>  
                      <tr>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Foto<strong></td>
                        <td width="40%">
                          <?php if(!empty($foto)){?>
                          <img src="foto/<?php echo $foto;?>" class="img-fluid" width="300px;">
                          <?php }?>
                        </td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama;?></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Username<strong></td>
                        <td width="80%"><?php echo $username;?></td>
                      </tr>              
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email;?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Level<strong></td>
                        <td width="80%"><?php echo $level;?></td>
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