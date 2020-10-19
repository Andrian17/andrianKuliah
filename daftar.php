<!DOCTYPE html>
<html>
<head>
	<title>
		Form Daftar
	</title>
</head>
<body>

	<header>
		<h2>Form Pendaftaran</h2>
	</header>

	<form action="proses_daftar.php" method="POST">
		<fieldset>
			<p>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" placeholder="nama">
			</p>
			<p>
				<label for="nim">Nim :</label>
				<input type="text" name="nim" placeholder="nim">
			</p>
			<p>
				<label for="alamat">Alamat :</label>
				<textarea name="alamat" placeholder="Alamat"></textarea>
			</p>
			<p>
				<input type="submit" value="daftar" name="daftar">
			</p>
			
		</fieldset>
	</form>

</body>
</html>