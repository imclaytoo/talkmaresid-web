<?php
	include 'koneksi.php';

	$nama		=$_POST['nama'];
	$email		=$_POST['email'];
	$komentar	=$_POST['komentar'];

	$query = "INSERT INTO data VALUES('null', '$nama', '$email', '$komentar')";
	mysqli_query($koneksi, $query);
	echo "<br><a href='tampil.php'>Lihat Komentar</a>";
?>