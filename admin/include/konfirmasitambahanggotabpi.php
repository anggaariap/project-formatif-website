<?php 
$id_departemen = $_POST['id_departemen'];
$id_periode = $_POST['id_periode'];
$nama_anggota = $_POST['nama_anggota'];
$foto_anggota = $_FILES['foto']['name'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];


if(empty($nama_anggota)){
	header("Location:index.php?include=tambah-anggota-bpi&notif=tambahnamakosong");
}elseif(empty($jabatan)){
	header("Location:index.php?include=tambah-anggota-bpi&notif=tambahjabatankosong");
}elseif(empty($status)){
	header("Location:index.php?include=tambah-anggota-bpi&notif=tambahstatuskosong");
}elseif(empty($id_periode)){
	header("Location:index.php?include=tambah-anggota-bpi&notif=tambahperiodekosong");
}elseif(empty($id_departemen)){
	header("Location:index.php?include=tambah-anggota-bpi&notif=tambahdepartemenkosong");
}else {
	$ekstensi_boleh = array('jpg');
	$x = explode('.',$foto_anggota);
	$ekstensi = strtolower(end($x));
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	$direktori = 'foto/'.$nama_file;
	
	if(in_array($ekstensi,$ekstensi_boleh) === true){
		move_uploaded_file($lokasi_file,$direktori);
		$sql = "insert into `anggota` (`id_departemen`,`id_periode`, `nama_anggota`, `foto_anggota`,`jabatan`, `status`) 
		values ('$id_departemen','$id_periode','$nama_anggota','$foto_anggota','$jabatan', '$status')";
		mysqli_query($koneksi,$sql);
	
		header("Location:index.php?include=bpi&notifanggota=tambahanggotaberhasil");
	}else{
		
		header("Location:index.php?include=tambah-anggota-bpi&notif=gambarsalah");

	}

		
}

?>