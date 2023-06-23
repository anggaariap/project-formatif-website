    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Anggota PSDM</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=psdm">PSDM</a></li>
              <li class="breadcrumb-item active">Tambah Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Anggota</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
    
      </br>
      <?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="tambahnamakosong"){?>
        <div class="alert alert-danger" role="alert">Maaf data nama wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahjabatankosong"){?>
        <div class="alert alert-danger" role="alert">Maaf data jabatan  wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahperiodekosong"){?>
        <div class="alert alert-danger" role="alert">Maaf data periode wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="tambahstatuskosong"){?>
        <div class="alert alert-danger" role="alert">Maaf data status wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="gambarsalah"){?>
        <div class="alert alert-danger" role="alert">Maaf gambar yang diizinkan hanya .jpg</div>
      <?php }?>
      <?php }?>
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-tambah-anggota-psdm" enctype="multipart/form-data">
        <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-12 col-form-label"><span class="text-info"><i
              class="fas fa-user-circle"></i> <u>Silahkan masukkan data anggota</u></span></label>
        </div>
          <div class="form-group row">
            <label for="foto_anggota" class="col-sm-3 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="customFile" width="48" height="48">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_anggota" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-7">
              <select class="form-control" id="jabatan" name="jabatan">
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