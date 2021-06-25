<?php
	session_start();
	include 'koneksi.php'; // masukan koneksi DB

	$id		= @$_GET['id']; // ambil data ID di URL

	// ambil variable data 
	$nama	= $_POST['e_nama'];
	$email	= $_POST['e_email'];
	$isi	= $_POST['e_isi'];

	$sql = "UPDATE data SET nama='".$nama."', email='".$email."', isi='".$isi."', WHERE id='$id'";

	//Proses query update
	$update = mysqli_query($koneksi, $sql);
	if ($update){
		// pesan dengan sistem session
		$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
		header("location:tampil.php"); // kembali ke halaman tampil
	}else {
		echo "Gagal update data!";
	}
?>