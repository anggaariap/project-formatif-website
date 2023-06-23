<?php
    if(isset($_GET['data'])){
    $id_berita = $_GET['data'];
    $_SESSION['id_berita'] = $id_berita;

    $sql_d = "select `id_berita`,`judul`, `isi`,`tanggal`,`cover` from `berita` where `id_berita` = '$id_berita'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
    $id_berita = $data_d[0];
    $judul= $data_d[1];
    $isi= $data_d[2];
    $tanggal = $data_d[3];
    $cover = $data_d[4];
    }
  }
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Berita</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="judulkosong"){?>
        <div class="alert alert-danger" role="alert">Maaf judul wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="isikosong"){?>
        <div class="alert alert-danger" role="alert">Maaf isi wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tanggalkosong"){?>
        <div class="alert alert-danger" role="alert">Maaf tanggal wajib di isi</div>
      <?php }?>
      <?php }?>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-berita" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
            <span class="text-info">
            <i class="fas fa-list"></i>
            <u>Data Berita</u></span></label>
          </div>
          <div class="form-group row">
            <label for="cover" class="col-sm-3 col-form-label">Cover</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="cover" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $judul;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Isi Berita</label>
            <div class="col-sm-7">
            <textarea class="form-control" name="isi" id="editor1" rows="12" value=""> <?php echo $isi;?></textarea>
            </div>
          </div>
        </div>
          <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
          <button type="submit" class="btn btn-info float-right">
          <i class="fas fa-save"></i> Simpan</button>
          </div>
        </div>
        <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

    </section>