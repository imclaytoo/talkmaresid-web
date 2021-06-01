<html>
<head>
<title>Halaman Komentar</title>
<body>
	<h1><center>Komentar Anda </center> </h1>
	<php?
		$nama=$_GET['vnama'];
        $email=$_GET['vemail'];
        $komentar=$_GET['vkomen'];

		echo $nama;
		echo $email;
		echo $komentar;
		
		//mysql_connect("localhost","root","");
        //mysql_select_db("komentar");
        //$result=mysql_query("insert into data values('null','$vnama','$vemail','$vkomen')");
        //
        //if ($result) {
        //    echo "Data Berhasil Dikirim..<br>";
        //}
        //    echo "<br><a href='tampil.php'>Lihat Komentar</a>";

		//mysql_connect("localhost","root","");
		//mysql_select_db("komentar");
		//$result=mysql_query("select * from data order by id DESC");
		//
		//while($data=mysql_fetch_row($result)){
		//	echo "<hr/>";
		//	echo "<b>$data[1]</b><br>";
		//	echo "email : <i>$data[2]</i><br>";
		//	echo "$data[3]<br>";
		//}
	?>
</body>
</html>