<?php 
	include 'connection.php';

	if (isset($_POST['simpan'])){

		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$alamat = $_POST['alamat'];

		$sq = "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id=$id";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: list.php');
		} else {
			die("Gagal menyimpan perubahan")
		}

	} else {
		die("Akses dilarang..")
	}

 ?>