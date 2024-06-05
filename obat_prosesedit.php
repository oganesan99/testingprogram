<?php
include('includes/config.php');
$kode_obat	= $_POST['kode_obat'];
$nama_obat	= $_POST['nama_obat'];
$golongan	= $_POST['golongan'];
$stok		= $_POST['stok'];
$harga		= $_POST['harga'];
$sql 	= "UPDATE data_obat SET kode_obat='$kode_obat', nama_obat='$nama_obat', golongan='$golongan', stok='$stok', harga='$harga' WHERE kode_obat='$kode_obat'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data obat.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'obat_formedit.php?nama_obat=$nama_obat'; 
		</script>";

}
?>