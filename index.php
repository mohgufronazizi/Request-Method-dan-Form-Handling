<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Barang</title>
	<?
		require('config/style.php');
		require('config/script.php');
	?>	
</head>
<body>
	<div id="form" class="pt-4">
		
		<div class="container">
			<div class="row d-flex justify-content-center">
				
				<div id="logo" class="mb-4 d-flex justify-content-center">
					<img src="img/jong_koding_logo.png">
				</div>
				<div class="col col-8 p-5 mb-5 bg-light">

					<form action="action.php" method="POST">

						<div class="form-group mb-3">
							<label for="kodeBarang" class="mb-2">Kode Barang</label>
							<input type="text" name="kodeBarang" class="form-control" id="kodeBarang" required>
						</div>

						<div class="form-group mb-3">
							<label for="namaBarang" class="mb-2">Nama Barang</label>
							<input type="text" name="namaBarang" class="form-control" id="namaBarang" required>
						</div>

						<div class="form-group mb-3">
							<label for="hargaBarang" class="mb-2">Harga Barang</label>
							<input type="number" name="hargaBarang" class="form-control" id="hargaBarang" required>
						</div>

						<div class="form-group mb-3">
							<label for="jumlahBarang" class="mb-2">Jumlah Barang</label>
							<input type="number" name="jumlahBarang" class="form-control" id="jumlahBarang" required>
						</div>

						<div class="form-group mb-3">
							<label for="tanggal" class="mb-2">Tanggal</label>
							<input type="date" name="tanggal" class="form-control" id="tanggal" required>
						</div>

						<div class="form-group mb-3">
							<label for="keterangan" class="mb-2">Keterangan</label>
							<textarea name="keterangan" id="keterangan" rows="8" class="form-control"></textarea>
						</div>

						<p class="mb-3">* Pastikan isi Form Sudah Benar karena ini Merupakan Sebuah Data</p>

						<div class="d-flex justify-content-center">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary p-3">
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>