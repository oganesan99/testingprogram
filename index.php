<!doctype html>
<?php
session_start();
include('includes/config.php');
?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>Perpustakaan</title>

		<style>
			nav a {
				color: white;
			}
		</style>
	</head>
	<body>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- JavaScript untuk menampilkan Modal -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<nav class="navbar navbar-expand-lg bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">Home</a>
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<!-- <a class="nav-link active" aria-current="page" href="#">Data Buku Perpustakaan</a> -->
						</li>   
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="myInput">
						<!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
					</form>
				</div>
			</div>
		</nav>
		<div class="container mt-3">
			<div class="d-flex justify-content-between">
				<a href="buku_formadd.php" type="button" class="btn btn-primary align-self-center" style="height: 40px !important; width: 70px !important; ">Add </a>
				<h1 h1 style="text-align:center">Data Buku Perpustakaan</h1>
				<div class=""></div>
			</div>
			<table class="table mt-3" id="myTable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Kode Buku</th>
						<th scope="col">Judul Buku</th>
						<th scope="col">Pengarang</th>
						<th scope="col">Jenis Buku</th>
						<th scope="col">Stok</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$nomor = 0;
					$sqlperpustakaan = "SELECT * FROM data_buku ORDER BY kode_buku ASC";
					$queryperpustakaan = mysqli_query($koneksidb,$sqlperpustakaan);
					while ($result = mysqli_fetch_array($queryperpustakaan)){
					$nomor++;
					?>
					<tr>
						<td><?php echo htmlentities($nomor);?></td>
						<td><?php echo htmlentities($result['kode_buku']);?></td>
						<td><?php echo htmlentities($result['judul_buku']);?></td>
						<td><?php echo htmlentities($result['pengarang']);?></td>
						<td><?php echo htmlentities($result['jenis_buku']);?></td>
						<td><?php echo htmlentities($result['stok']);?></td>
						<td class='text-left'>
							<a class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#konfirmasi_update' data-href="buku_formedit.php?kode_buku=<?php echo $result['kode_buku'];?>"> Update </a>
							<a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#konfirmasi_hapus' data-href="buku_hapus.php?kode_buku=<?php echo $result['kode_buku'];?>">Delete</a>

							<!-- Modal update -->
							<div class="modal fade" id="konfirmasi_update" tabindex="-1" aria-labelledby="myModalUpdate" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<p>Apakah Anda yakin ingin mengubah data buku ini?</p>
										</div>
										<div class="modal-footer">
											<a class="btn btn-primary btn-sm btn-ya"> Ya</a>
											<button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal delete -->
							<div class="modal fade" id="konfirmasi_hapus" tabindex="-1" aria-labelledby="myModalHapus" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<p>Apakah Anda yakin ingin menghapus data buku ini?</p>
										</div>
										<div class="modal-footer">
											<a class="btn btn-primary btn-sm btn-ya"> Ya</a>
											<button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak</button>
										</div>
									</div>
								</div>
							</div>
							<!-- JavaScript untuk menampilkan modal -->
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<script>
			$(document).ready(function() {
				$('#konfirmasi_update').on('show.bs.modal', function(e) {
					$(this).find('.btn-ya').attr('href', $(e.relatedTarget).data('href'));
				});

				$('#konfirmasi_hapus').on('show.bs.modal', function(e) {
					$(this).find('.btn-ya').attr('href', $(e.relatedTarget).data('href'));
				});

				$("#myInput").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("#myTable tbody tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
		</script>
	</body>
</html> 