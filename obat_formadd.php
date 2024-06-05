<!doctype html>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Apotek</title>

    <style>
			nav a {
				color: white;
			}
		</style>
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/apotek/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Apotek</a>
        </li> -->
        
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form> -->
    </div>
  </div>
</nav>
<h1 h1 style="text-align:center">Tambah Data Obat</h1>
<div class="container">
    <form method="post" name="theform" action="obat_prosesadd.php" class="form-horizontal" onsubmit="return valid(this);" enctype="multipart/form-data">
    <div class="mb-8">
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Kode Obat</label>
            <input type="text" class="form-control" name="kode_obat" placeholder="Input Kode Obat" required>
        </div>
    
    <div class="mb-8">
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" name="nama_obat" placeholder="Input Nama Obat" required>
        </div>

        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Golongan</label>
            <select class="form-select" name="golongan" id="golongan" aria-label="--Pilih Golongan Obat--" required>
        <?php
			$golongan = $result['golongan'];
            echo "<option value='$golongan' selected>".$golongan."</option>";
            echo "<option value='Obat Bebas'>Obat Bebas</option>";
            echo "<option value='Obat Terbatas'>Obat Terbatas</option>";
            echo "<option value='Obat Keras'>Obat Keras</option>";
            echo "<option value='Psikotropika'>Psikotropika</option>";
        ?>
        </select>
        </div>
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" placeholder="Input Stok" required>
        </div>
        <div class="col col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Input Harga" required>
        </div>

        <br>
        <div class="col col-lg-4">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="index.php" class="btn btn-outline-primary">Batal</a>
        </div>
    </div>
    </form>
    </div>
  </body>

