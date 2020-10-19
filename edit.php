<?php 
	include 'connection.php';

	if (!isset($_GET['id'])) {
		header('location: list.php');
	}

	$id = $_GET['id'];

	$sq = "SELECT * FROM mahasiswa WHERE id=$id";
	$query = mysqli_query($db, $sq);
	$mahasiswa = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) < 1) {
		die("Tidak ditemukan");
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form Edit</title>
 </head>
 <body>
 	<form action="proses_edit.php" method="POST"></form>
 		<fieldset>
 			<input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>"/>

 			<p>
 				<label for="nama">Nama :</label>
 				<input type="text" name="username" placeholder="nama" value="<?php echo $mahasiswa['nama'] ?>"/>
 			</p>

 			<p>
 				<label for="nim">Nim :</label>
 				<input type="text" name="nim" placeholder="nim" value="<?php echo $mahasiswa['nim'] ?>"/>
 			</p>

 			<p>
 				<label for="alamat">Alamat :</label>
 				<input type="text" name="nama" placeholder="alamat" value="<?php echo $mahasiswa['alamat'] ?>"/>

 			</p>

 			<p>
 				<input type="submit" name="simpan" value="simpan" />
 			</p>

 		</fieldset>
 
 </body>
 </html>