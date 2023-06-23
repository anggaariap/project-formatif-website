<!-- Content Header (Page header) -->
<section class="content-header" >
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah Program Kerja Kominfo</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=kominfo"> Kominfo</a></li>
                    <li class="breadcrumb-item active">Tambah Proker</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" >

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Program Kerja Kominfo
            </h3>

        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
            <?php if (!empty($_GET['notif'])) { ?>
            <?php if ($_GET['notif'] == "departemenkosong") { ?>
            <div class="alert alert-danger" role="alert">
                Maaf departemen wajib dipilih</div>
            <?php } ?>
            <?php } ?>
        </div>
        <div class="col-sm-10">
            <?php if (!empty($_GET['notif'])) { ?>
            <?php if ($_GET['notif'] == "prokerkosong") { ?>
            <div class="alert alert-danger" role="alert">
                Maaf nama proker wajib diisi</div>
            <?php } ?>
            <?php } ?>
        </div>
        <div class="col-sm-10">
            <?php if (!empty($_GET['notif'])) { ?>
            <?php if ($_GET['notif'] == "deskripsiprokerkosong") { ?>
            <div class="alert alert-danger" role="alert">
                Maaf deskripsi proker tidak boleh kosong</div>
            <?php } ?>
            <?php } ?>
        </div>
        <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-proker-kominfo" method="post">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama_proker" class="col-sm-3 col-form-label">Program Kerja</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama_proker" value="" name="nama_proker">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi_proker" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi_proker">
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
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="col-sm-11">
                    <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i>Tambah</button>
                </div>
            </div>
            
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->