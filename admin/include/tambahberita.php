    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Berita FORMATIF</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=berita">Berita</a></li>
              <li class="breadcrumb-item active">Tambah Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> <b>Form Tambah berita</b></h3>
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
      <?php if($_GET['notif']=="coverkosong"){?>
        <div class="alert alert-danger" role="alert">Maaf cover wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="gambarsalah"){?>
        <div class="alert alert-danger" role="alert">Maaf gambar yang diizinkan hanya .jpg</div>
      <?php }?>
      <?php }?>
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-tambah-berita" enctype="multipart/form-data">
        <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-12 col-form-label"><span class="text-info"><i
              class="fas fa-user-circle"></i> <u>Silahkan masukkan data berita</u></span></label>
        </div>
        
          <div class="form-group row">
            <label for="cover" class="col-sm-3 col-form-label">cover </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="cover" id="customFile" width="48" height="48">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="judul" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" name="tanggal" id="tanggal" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label"> Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor1" rows="12"value=""></textarea>
            </div>
          </div>

   
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
          </div>
        </div>

      </div>
  
      </form>
    </div>
    <!-- /.card -->

    </section>