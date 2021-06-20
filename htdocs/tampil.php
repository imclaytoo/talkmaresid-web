<!DOCTYPE html>
<html>
<head>
	<title>Halaman Komentar</title>
</head>
<body>
	<?php
		include 'koneksi.php';

		$sql = 'SELECT * FROM data';

		$query = mysqli_query($koneksi, $sql);
		if (!$query) {
			die ('SQL Error: '.mysqli_error($koneksi));
		}

		//Ini tampilan output komentar
		echo '
			<table>
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Komentar</th>
				</tr>
			</thead>
			<tbody>';

		while ($row = mysqli_fetch_array($query)){
			echo '
			<tr>
				<td>'.$row['nama'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['isi'].'</td>
			</tr>';
		}

		echo '
			</tbody>
		</table>';
	?>
</body>
</html>