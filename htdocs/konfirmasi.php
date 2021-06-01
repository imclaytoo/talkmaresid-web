<?
$nama=$_POST['vnama'];
$email=$_POST['vemail'];
$komentar=$_POST['vkomen'];
mysql_connect("localhost","root","");
mysql_select_db("komentar");
$result=mysql_query("insert into data values('null','$vnama','$vemail','$vkomen')");
if ($result) {
echo "Data Berhasil Dikirim..<br>";
}
echo "<br><a href='tampil.php'>Lihat Komentar</a>";
?>