<?php
include('includes/config.php');
$kode_obat	= $_POST['kode_obat'];
$nama_obat	= $_POST['nama_obat'];
$golongan	= $_POST['golongan'];
$stok		= $_POST['stok'];
$harga		= $_POST['harga'];
$sql 	= "INSERT INTO data_obat (kode_obat,nama_obat,golongan,stok,harga) VALUES ('$kode_obat','$nama_obat','$golongan','$stok','$harga')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data obat.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'obat_formadd.php?kode_obat=$kode_obat'; 
		</script>";
}
?>