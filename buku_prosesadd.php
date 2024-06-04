<?php
include('includes/config.php');
$kode_buku	= $_POST['kode_buku'];
$judul_buku	= $_POST['judul_buku'];
$pengarang	= $_POST['pengarang'];
$jenis_buku	= $_POST['jenis_buku'];
$stok	= $_POST['stok'];
$sql 	= "INSERT INTO data_buku (kode_buku,judul_buku,pengarang,jenis_buku,stok) VALUES ('$kode_buku','$judul_buku','$pengarang','$jenis_buku','$stok')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data buku.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'buku_formadd.php?kode_buku=$kode_buku'; 
		</script>";
}
?>