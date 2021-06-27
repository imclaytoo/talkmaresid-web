<?php
	$servername = "localhost";
	$username = "sfcereni_talkmaresid1";
	$password = "sadis098~";
	$dbname = "sfcereni_komentar";

	$koneksi = mysqli_connect($servername, $username, $password, $dbname);
	if (!$koneksi){
		die("Connection Failed:".mysqli_connect_error());
	}
?>