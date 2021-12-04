<?

if (isset($_POST['submit'])) {
	
	$kode=$_POST['kodeBarang'];
	$nama=$_POST['namaBarang'];
	$harga=$_POST['hargaBarang'];
	$jumlah=$_POST['jumlahBarang'];
	$tanggal=$_POST['tanggal'];
	$keterangan=$_POST['keterangan'];
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampilkan Inputan</title>
	<?

	require('config/style.php');
	require('config/script.php');

	?>
</head>
<body>
	<div id="dataBarang" class="pt-4">

		<div class="container">

			<div class="row d-flex justify-content-center">

				<div id="logo" class="mb-4 d-flex justify-content-center">
					<img src="img/jong_koding_logo.png">
				</div>

				<div class="col col-10">
					
					<table class="table table-striped bg-light">

						<tr class="bg bg-danger">
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Harga Barang</th>
							<th>Jumlah</th>
							<th>Tanggal</th>
							<th>Keterangan</th>
						</tr>
						<tr>
							<td><?=$kode?></td>
							<td><?=$nama?></td>
							<td><?=$harga?></td>
							<td><?=$jumlah?></td>
							<td><?=$tanggal?></td>
							<td><?=$keterangan?></td>
						</tr>

					</table>

				</div>

			</div>

		</div>

	</div>

</body>
</html>