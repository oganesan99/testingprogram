<?php
include('includes/config.php');
$kode_buku		= $_POST['kode_buku'];
$judul_buku	= $_POST['judul_buku'];
$pengarang	= $_POST['pengarang'];
$jenis_buku	= $_POST['jenis_buku'];
$stok	= $_POST['stok'];
$sql 	= "UPDATE data_buku SET kode_buku='$kode_buku', judul_buku='$judul_buku', pengarang='$pengarang', jenis_buku='$jenis_buku', stok='$stok' WHERE kode_buku='$kode_buku'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'buku_formedit.php?judul_buku=$judul_buku'; 
		</script>";

}
?>