<?php
	require_once('koneksi.php');

	$idkomen    = $_GET['idx'];
	$sql = "DELETE FROM data WHERE id='$idkomen'";

	if(mysqli_query($koneksi, $sql)){
		header('location:tampil.php');
		echo "Berhasil menghapus data";
	}else {
		echo "Gagal menghapus data";
	}
?>