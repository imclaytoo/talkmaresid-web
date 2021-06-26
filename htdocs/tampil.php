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
                    <li><a href="#">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.php">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div id="bgtampil">
	    <div id="tulisanphp">
            <div id="judultampil">
                <h1>COMMENT PAGE</h1>
                <br><br>
                <h3>If you are an admin, you can delete comment, please login first!
                <br><br>
                <br><br>
            </div>
	
	        <?php
		        include 'koneksi.php';

		        $sql    = 'SELECT * FROM data';
		        $query  = mysqli_query($koneksi, $sql);
		        if (!$query) {
			        die ('SQL Error: '.mysqli_error($koneksi));
		        }

		        //Ini tampilan output komentar
		        while ($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo " | ";?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo "<br>";?></td>
                <td><?php echo $row['isi'];?></td>
                <td><?php echo "<br>";?></td>
                <td><?php echo "<img src='images/".$row['gambar']."'width='250px' height='250px'/>";?></td>
                <td><?php echo "<br>";?></td>
                <td><a class="button" href="edit.php?idx=<?php echo $row['id'];?>">Edit</a>
                <td><?php echo "<br><br>";?></td>
            </tr>
            <?php
                };
            ?>
	    </div>
	</div>

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