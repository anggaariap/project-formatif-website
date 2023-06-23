<?php
if(isset($_SESSION['id_anggota'])){
$id_anggota = $_SESSION['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan = $_POST['jabatan'];
$id_periode = $_POST['id_periode']; 
$status = $_POST['status'];
$id_departemen = $_POST['id_departemen'];

//get foto
$sql_f = "SELECT `foto_anggota` FROM `anggota` WHERE `id_anggota`='$id_anggota'";
$query_f = mysqli_query($koneksi,$sql_f);
while($data_f = mysqli_fetch_row($query_f)){
$foto = $data_f[0];
}

	if(empty($nama_anggota)){
			header("Location:index.php?include=edit-anggota-kesma&data=".$id_anggota."&notif=namakosong");
		}else if(empty($jabatan)){
			header("Location:index.php?include=edit-anggota-kesma&data=".$id_anggota."&notif=jabatankosong");
		}else if(empty($id_periode)){
			header("Location:index.php?include=edit-anggota-kesma&data=".$id_anggota."&notif=periodekosong");
		}else if(empty($status)){
			header("Location:index.php?include=edit-anggota-kesma&data=".$id_anggota."&notif=statuskosong");
		}else if(empty($id_departemen)){
			header("Location:index.php?include=edit-anggota-kesma&data=".$id_anggota."&notif=departemenkosong");
		}else{
			$lokasi_file = $_FILES['foto']['tmp_name'];
			$nama_file = $_FILES['foto']['name'];
			$direktori = 'foto/'.$nama_file;
			if(move_uploaded_file($lokasi_file,$direktori)){
				if(!empty($foto)){
				unlink("foto/$foto");
				}
					$sql = "update `anggota` set `id_departemen`='$id_departemen',`id_periode`='$id_periode', `nama_anggota`='$nama_anggota' ,`foto_anggota`='$nama_file' ,`jabatan` = '$jabatan',`status` = '$status' 
					where `id_anggota`='$id_anggota'";
				mysqli_query($koneksi,$sql);
			}else{
					$sql = "update `anggota` set `id_departemen`='$id_departemen',`id_periode`='$id_periode', `nama_anggota`='$nama_anggota' ,`jabatan` = '$jabatan',`status` = '$status' 
					where `id_anggota`='$id_anggota'";	
				mysqli_query($koneksi,$sql);
				}
				header("Location:index.php?include=kesma&notifanggota=editanggotaberhasil");
				unset($_SESSION['id_anggota']);
		}
	}
?>