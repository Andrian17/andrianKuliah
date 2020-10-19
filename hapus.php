<?php 
	include 'connection.php';
 	
 	if (isset($_GET['id'])) {
 		
 		$id = $_GET['id'];

 		$sq = "DELETE FROM mahasiswa WHERE id=$id";
 		$query = mysqli_query($db, $sq);

 		if ($query) {
 			header('location: list.php');
 		} else {
 			die("Gagal Menghapus.!");
 		}
 	} else {
 		die("akses dilarang");
 	}

 ?>

