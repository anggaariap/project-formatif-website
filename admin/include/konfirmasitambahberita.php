<?php 
$cover= $_FILES['cover']['name'];
$judul= $_POST['judul'];
$isi= $_POST['isi'];
$tanggal= $_POST['tanggal'];

if(empty($cover)){
	header("Location:index.php?include=tambah-berita&notif=coverkosong");
}elseif(empty($judul)){
	header("Location:index.php?include=tambah-berita&notif=judulkosong");
}elseif(empty($isi)){
	header("Location:index.php?include=tambah-berita&notif=isikosong");
}elseif(empty($tanggal)){
	header("Location:index.php?include=tambah-berita&notif=tanggalkosong");
}else {
    $tanggal = date('Y-m-d',strtotime($tanggal));

    $ekstensi_boleh = array('jpg');
	$x = explode('.',$cover);
	$ekstensi = strtolower(end($x));
	$lokasi_file = $_FILES['cover']['tmp_name'];
	$nama_file = $_FILES['cover']['name'];
	$direktori = 'foto/'.$nama_file;
	
	if(in_array($ekstensi,$ekstensi_boleh) === true){
		move_uploaded_file($lokasi_file,$direktori);
		$sql = "insert into `berita` (`judul`,`isi`, `tanggal`, `cover`) 
		values ('$judul','$isi','$tanggal','$cover')";
		mysqli_query($koneksi,$sql);
	
		header("Location:index.php?include=berita&notif=tambahberhasil");
	}else{
		
		header("Location:index.php?include=tambah-berita&notif=gambarsalah");

	}
}
?>