<?php
include("koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_GET["include"])){
	$include = $_GET["include"];
	?>
	<head>
	<?php include("includes/head.php");?>
	</head>

	<body>
		<?php include("includes/navigasi.php");?>

		<?php
		// pemanggilan konten index
		if($include=="home"){
		include("include/home.php");
		}else if($include=="bpi"){
			include("include/bpi.php");
		}else if($include=="psdm"){
			include("include/psdm.php");
		}else if($include=="kesma"){
			include("include/kesma.php");
		}else if($include=="kominfo"){
			include("include/kominfo.php");
		}else if($include=="minbak"){
			include("include/minbak.php");
		}else if($include=="perhub"){
			include("include/perhub.php");
		}else if($include=="berita"){
			include("include/berita.php");
		}else if($include=="detilberita"){
			include("include/detilberita.php");
		}
		?>

		<?php include("includes/footer.php");?>

		<!-- Optional Javascript ; choose one of the two! -->
		<?php include("includes/script.php");?>
	</body>
<?php
}else{
?>
<head>
	<?php include("includes/head.php");?>
</head>
<body>
	<?php include("includes/navigasi.php");?>

	<?php
	// pemanggilan konten home
	include("include/home.php");
	?>

	<?php include("includes/footer.php");?>

	<!-- Optional Javascript ; choose one of the two! -->
	<?php include("includes/script.php");?>
</body>
<?php
}
?>
</html>