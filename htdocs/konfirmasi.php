<!DOCTYPE html>
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

	<section>
	<div id="bgkonfirm">
	<div id="stylekonfirm">
		<h1>Confirm Comment</h1>
		<?php
			include 'koneksi.php';

			$nama	= $_POST['nama'];
			$email	= $_POST['email'];
			$isi	= $_POST['isi'];

            $nama_file = $_FILES['gambar']['name'];
            $ukuran_file = $_FILES['gambar']['size'];
            $tipe_file = $_FILES['gambar']['type'];
            $tmp_file = $_FILES['gambar']['tmp_name'];

            $waktu = date('His');
            $nama_file_baru = $waktu.$nama_file;
            $path = "images/".$nama_file_baru;

            if ($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
                if ($ukuran_file <= 2000000){
                    move_uploaded_file($tmp_file, $path);

                    $sql = "INSERT INTO data (id, nama, email, isi, gambar) VALUES('null', '$nama', '$email', '$isi', '$nama_file_baru')";
                    if(mysqli_query($koneksi, $sql)){			
			            echo "<a href='tampil.php'>Show Comments</a>";
                    }else{
                        echo "<a>Failed to add comments</a>";
                    }
                }else{
                    echo "Sorry, the file size is way too big.";
                }
            }else{
                echo "Sorry, the file type must be jpg/png.";
            }
		?>
	</div>
	</div>
<section>

<footer class="footer">
        <div class="kotak">
            <div class="row">
                <div class="footer-col">
                    <h4>About us</h4>
                    <p>Our team was founded to create a friendly
                    knowledge and sharing about HORROR GAME
                    CALLED "LITTLE NIGHTMARE". Our team, strives 
                    to provide a review of various aspects as well 
                    as general introductions about this game &
                    will explore everything to increase insight. 
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Content</h4>
                    <ul>
                            <li><a href="themaw.html">Location</a></li>
                            <li><a href="prison.html">Levels</a></li>
                            <li><a href="statue.html">Items</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><p>0851-5545-8847</p></li>
                        <li><p>0851-5545-8847</p></li>
                        <li><p>erlanggasetiawan231@gmail.com</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>