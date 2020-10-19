<?php 
	include 'connection.php';


	if (isset($_POST['daftar'])) {
		
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];

		$sq = "INSERT INTO mahasiswa (username, nim, alamat) VALUE ('$nama', '$nim', '$alamat')";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: index.php?status=sukses');
		} else {
			header('location: index.php?status=gagal');
		}
	}
	else {
		die("akses dilarang");
	}
 ?>