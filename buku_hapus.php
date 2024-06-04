<?php
session_start();
include('includes/config.php');
if(isset($_GET['kode_buku'])){
	$id	= $_GET['kode_buku'];
	$mySql	= "DELETE FROM data_buku WHERE kode_buku='$id'";
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