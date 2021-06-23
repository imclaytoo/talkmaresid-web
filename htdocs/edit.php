<?php
    require_once('koneksi.php');

    $idkomen    = $_GET['idx'];
	$query      = mysqli_query($koneksi,"SELECT * FROM data WHERE id='$idkomen'");
	$row        = mysqli_fetch_array($query);
?>
<html>
<head>
	<title>Halaman Komentar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
</head>

<body>
	<nav>
        <div class="bannerabout">
            <div class="headernav">
                <img src="gambar/logo-white.png" class="logo">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="deskripsi.html">Description</a></li>
                    <li><a href="story.html">Story</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Content</button>
	                    <div class="dropdown-content">
        	                <a href="#">Location</a>

                            <div class="dropdown">
                	            <a href="themaw.html"> -> The Maw</a>
                            </div>

                            <a href="#">Levels</a>
                            <div class="dropdown">
                                <a href="prison.html"> -> Prison</a>
                                <a href="thelair.html"> -> The Lair</a>
                                <a href="kitchen.html"> -> Kitchen</a>
                	            <a href="guestarea.html"> -> Guest Area</a>
                                <a href="ladyroom.html"> -> The Lady's Quarter</a>
                            </div>

               	            <a href="#">Items</a>
                            <div class="dropdown">
                                <a href="statue.html"> -> Statue</a>
                                <a href="lantern.html"> -> Lantern</a>
                            </div>
                        </div>
                    </div>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div id="bgtampil">
	    <div id="tulisanphp">
            <div id="judultampil">
                <h1>Comment</h1>
            </div>

    <div class="backgroundkomentar">
        <h1>comments</h1>
        <form action="" method="POST">
            <input type="text" name="e_nama" id="inputnama" value="<?php echo $row['nama'];?>"><br><br>
            <input type="text" name="e_email" id="inputnama" value="<?php echo $row['email'];?>"><br><br>
            <textarea name="e_isi"><?php echo $row['isi'];?></textarea><br><br>
            <input type="submit" value="Update" name="vsave">
            <input type="reset" value="Reset">
        </form>
            
    </div>
    <?php
        if(isset($_POST['vsave'])) {
            require_once('koneksi.php');

	        // ambil variable data 
	        $nm	    = $_POST['e_nama'];
	        $mail	= $_POST['e_email'];
	        $komen	= $_POST['e_isi'];

	        $sql = "UPDATE data SET nama='".$nm."', email='".$mail."', isi='".$komen."' WHERE id='".$idkomen."'";

	        //Proses query update
	        if (mysqli_query($koneksi, $sql)) {
		        echo "1 data berhasil diupdate";
                echo "<br>";
                echo "<a class='button' href='tampil.php'>Show Comments</a>";
	        }
            else {
		        echo "Gagal update data!";
	        }
        }
    ?>
</body>
</html>