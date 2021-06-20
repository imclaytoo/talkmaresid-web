<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "komentar";

	$koneksi = mysqli_connect($servername, $username, $password, $dbname);
	if (!$koneksi){
		die("Connection Failed:".mysqli_connect_error());
	}
?>