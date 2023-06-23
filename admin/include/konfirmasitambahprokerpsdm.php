<?php 
$nama_proker = $_POST['nama_proker'];
$deskripsi_proker = $_POST['deskripsi_proker'];
$id_departemen = $_POST['id_departemen'];

if(empty($nama_proker)){
	header("Location:index.php?include=tambah-proker-psdm&notif=prokerkosong");
}else if(empty($deskripsi_proker)){
    header("Location:index.php?include=tambah-proker-psdm&notif=deskripsikosong");
}else if(empty($id_departemen)){
    header("Location:index.php?include=tambah-proker-psdm&notif=departemenkosong");
}else{
	$sql = "INSERT INTO `proker` (`id_departemen`,`nama_proker`, `deskripsi_proker`) 
	VALUES ('$id_departemen','$nama_proker', '$deskripsi_proker')";
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=psdm&notifproker=tambahprokerberhasil");	
}
?>
