<?php
if(isset($_SESSION['id_berita'])){
$id_berita = $_SESSION['id_berita'];
$isi = $_POST['isi'];
$judul = $_POST['judul'];   
$tanggal = $_POST['tanggal'];

//get foto
$sql_f = "SELECT `cover` FROM `berita` WHERE `id_berita`='$id_berita'";
$query_f = mysqli_query($koneksi,$sql_f);
while($data_f = mysqli_fetch_row($query_f)){
$cover = $data_f[0];
}

if(empty($judul)){
    header("Location:index.php?include=edit-berita&data=".$id_berita."&notif=judulkosong");
    }else if(empty($isi)){
    header("Location:index.php?include=edit-berita&data=".$id_berita."&notif=isikosong");
	}else if(empty($tanggal)){
		header("Location:index.php?include=edit-berita&data=".$id_berita."&notif=tanggalkosong");
		}else{
        $lokasi_file = $_FILES['cover']['tmp_name'];
        $nama_file = $_FILES['cover']['name'];
        $direktori = 'foto/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($cover)){
            unlink("foto/$cover");
            }
                $sql = "update `berita` set `judul`='$judul',`isi`='$isi', `tanggal`='$tanggal' ,`cover`='$nama_file' where `id_berita`='$id_berita'";
            mysqli_query($koneksi,$sql);
        }else{
			$sql = "update `berita` set `judul`='$judul',`isi`='$isi', `tanggal`='$tanggal' where `id_berita`='$id_berita'";
            mysqli_query($koneksi,$sql);
            }
            header("Location:index.php?include=berita&notif=editberhasil");
        }
    }
?>