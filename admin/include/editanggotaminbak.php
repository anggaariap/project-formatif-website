<?php 
if(isset($_GET['data'])){
	$id_anggota= $_GET['data'];
  $_SESSION['id_anggota']= $id_anggota;
  //get data 
  $sql_d = "SELECT `id_anggota`, `id_departemen`, `id_periode`, `nama_anggota`, `foto_anggota`, `jabatan`,`status` FROM `anggota` 
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

<section class="content-header ">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Data Anggota</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?include=minbak">Minbak</a></li>
          <li class="breadcrumb-item active">Edit Data Anggota</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content ">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Anggota</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
      <?php if(!empty($_GET['notif'])){?>
        <?php if($_GET['notif']=="namakosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data nama wajib di isi</div>
        <?php }?>
        <?php if($_GET['notif']=="jabatankosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data jabatan  wajib di isi</div>
        <?php }?>
        <?php if($_GET['notif']=="periodekosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data periode wajib di isi</div>
        <?php }?>
        <?php if($_GET['notif']=="statuskosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data status wajib di isi</div>
        <?php }?>
        <?php if($_GET['notif']=="departemenkosong"){?>
          <div class="alert alert-danger" role="alert">Maaf departemen harus di isi</div>
        <?php }?>
      <?php }?>

    <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-anggota-minbak" enctype="multipart/form-data">
      <div class="card-body">
      <div class="form-group-center ">
          <label class="col-sm-12 col-form-label"><span class="text-info"><i
            class="fas fa-user-circle"></i> <u>Silahkan masukkan data anggota</u></span></label>
        </div>
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file" >
                <input type="file" class="custom-file-input" name="foto" id="customFile" width="48" height="48">
                <label class="custom-file-label" for="customFile">Choose File</label>
              </div>  
            </div>
          </div>
          <input type="hidden" name="id_user" value="<?php echo $id_anggota;?>">

        <div class="form-group row">
          <label for="nama_anggota" class="col-sm-3 col-form-label" >Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" value="<?php echo $nama_anggota;?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
          <div class="col-sm-7">
            <select class="form-control" id="jabatan" name="jabatan" >
              <option value="">Pilih jabatan</option>
              <option value="Ketua">Ketua</option>
              <option value="Wakil">Wakil</option>
              <option value="Anggota">Anggota</option>

            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="id_periode" class="col-sm-3 col-form-label">Periode</label>
          <div class="col-sm-7">
            <select class="form-control" id="id_periode" name="id_periode">
              <option value="">Pilih tahun</option>
              <option value="1">2020</option>
              <option value="2">2021</option>
              <option value="3">2022</option>
              <option value="4">2023</option>
              <option value="5">2024</option>
            
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="status" class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-7">
            <select class="form-control" id="status" name="status">
              <option value="">Pilih status</option>
              <option value="Aktif">Aktif</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="id_departemen" class="col-sm-3 col-form-label">Departemen</label>
          <div class="col-sm-7">
            <select class="form-control" id="id_departemen" name="id_departemen"> 
              <option value="">Pilih departemen</option>
              <option value="1">Badan Pengurus Inti (BPI)</option>
              <option value="2">Pengembangan Sumber Daya Mahasiswa (PSDM)</option>
              <option value="3">Kesejahteraan Mahasiswa (Kesma)</option>
              <option value="4">Perhubungan (Perhub)</option>
              <option value="5">Minat Bakat (Minbak)</option>
              <option value="6">Komunikasi dan Informasi (Kominfo)</option>               
            </select>
          </div>
        </div>
        <div class="col-sm-11">
          <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
        </div> 
      </div>

    </form>
  </div>
  <!-- /.card -->
</section>