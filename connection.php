<?php 
	$db = mysqli_connect("localhost", "root", "12345678", "crud");


	if (!$db) {
		die("Ada Kesalahan Koneksi dengan database !" . mysqli_connect_error());
	}


 ?>