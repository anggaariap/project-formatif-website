<?php
if (isset($_GET['data'])) {
    $id_proker = $_GET['data'];
    $_SESSION['id_proker'] = $id_proker;

    //get data kategori buku
    $sql_d = "SELECT `id_proker`,`id_departemen`,`nama_proker`, `deskripsi_proker`
  FROM `proker` WHERE `id_proker` = $id_proker";

    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data_d = mysqli_fetch_row($query_d)) {
        $id_proker = $data_d[0];
        $id_departemen = $data_d[1];
        $nama_proker = $data_d[2];
        $deskripsi_proker = $data_d[3];
        }
    }
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Proker Kesma</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=bpi">Kesma</a></li>
                    <li class="breadcrumb-item active">Edit Proker Kesma</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Proker Kesma</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "editprokerkosong") { ?>
        <div class="alert alert-danger" role="alert">
            Maaf Proker wajib diisi</div>
        <?php } ?>
        <?php } ?>

        <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "editdeskripsikosong") { ?>
        <div class="alert alert-danger" role="alert">
            Maaf deskripsi tidak boleh kosong</div>
        <?php } ?>
        <?php } ?>

        <?php if (!empty($_GET['notif'])) { ?>
        <?php if ($_GET['notif'] == "departemenkosong") { ?>
        <div class="alert alert-danger" role="alert">
            Maaf departemen tidak boleh kosong</div>
        <?php } ?>
        <?php } ?>

        <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-proker-kesma">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama_proker" class="col-sm-3 col-form-label">Proker</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama_proker" value="<?php echo $nama_proker ?>"
                            name="nama_proker">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi_proker" class="col-sm-3 col-form-label">Deskripsi Proker</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="deskripsi_proker"
                            value="<?php echo $deskripsi_proker ?>" name="deskripsi_proker">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_departemen" class="col-sm-3 col-form-label">Departemen</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="id_departemen" name="id_departemen">
                            <option value="">Pilih Departemen</option>
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
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

</section>