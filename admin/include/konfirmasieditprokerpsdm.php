<?php

if (isset($_SESSION['id_proker'])) {
    $id_proker = $_SESSION['id_proker'];

    $departemen = $_POST['id_departemen'];
    $proker = $_POST['nama_proker'];
    $deskripsi_proker = $_POST['deskripsi_proker'];

    if (empty($proker)) {
        header("Location:index.php?include=edit-proker-psdm&data=" . $id_proker . "&notif=editprokerkosong");
        } 
        else if (empty($deskripsi_proker)) {
        header("Location:index.php?include=edit-proker-psdm&data=" . $id_proker . "&notif=editdeskripsikosong");
        } 
        else if (empty($departemen)) {
        header("Location:index.php?include=edit-proker-psdm&data=" . $id_proker . "&notif=departemenkosong");
        } 
        else {

        $sql = " UPDATE `proker` SET `id_departemen` = '$departemen', `nama_proker` = '$proker', `deskripsi_proker` = '$deskripsi_proker' 
    WHERE `id_proker`='$id_proker'";
    
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_proker']);
        header("Location:index.php?include=psdm&notifproker=editprokerberhasil");
        } 
        
    }
?>