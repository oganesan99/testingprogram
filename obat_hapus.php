<?php
session_start();
include('includes/config.php');
if(isset($_GET['kode_obat'])){
	$id	= $_GET['kode_obat'];
	$mySql	= "DELETE FROM data_obat WHERE kode_obat='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'index.php'; 
		</script>";
}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'index.php'; 
		</script>";
}
?>