<html>
    <head>
        <title>
            Little Nightmare
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    </head>

    <body>
        <nav>
            <div class="bannerlocationprison">
                  <div class="headernav">
                      <img src="logo-white.png" class="logo">
                      <ul>
                          <li><a href="home.html">Home</a></li>
                          <li><a href="deskripsi.html">Description</a></li>
                          <li><a href="story.html">Story</a></li>
                          <div class="dropdown">
                            <button class="dropbtn">Content</button>
                            <div class="dropdown-content">
                            <a href="#">Character</a>
                            <a href="location.html">Location</a>
                            <a href="#">Levels</a>
                            <a href="#">Items</a>
                            </div>
                          </div>
                        
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#">Contact</a></li>
                      </ul>
            </div>
        </nav> 

        <div class="judulpagelocation">
            <h1>The prison</h1>
        </div>

        <section>
            <div class="background">
            <h1>Description</h1>
            <p>t is a very dark and lonely area and seems
                    to be located starboard of the Maw in the
                    lowest compartments. Various cabins are
                    connected by vent shafts or thick metallic
                    doors that Six cannot open. The Prison also
                    gives Six her first glimpse of the Janitor but
                    the most frequent antagonists encountered
                    here are the Leeches and the Eyes. There are
                    very little encounters with other beings and
                    Six spends the majority of her time in the</p>

            <div id="gambarlocationkanan">
                <img src="prisoncage.png">
            </div>

            <p id="deskripsikanan">
                            The name "The Prison" implies that the
                            children are being held there as unwilling
                            'guests'. The Janitor seems to be their
                            caretaker and keeps them in line. They
                            even have a play area, but are prohibited
                            from escaping by electric bars on both
                            sides. Six also sees a cafeteria where another
                            human gives her a piece of bread to subside
                            her hunger.
            </p>
                </div>
            </section>

            <section>
                <div class="backgroundbawahlocation">
                <h1>Solution</h1>
                <p>
                    Upon waking up, Six must head immediately towards the
                    right, at the end of the corridor she’ll find a vent that she
                    can open and through. Once through, she can climb the
                    stairway and crouch through the small opening in the
                    boarded up door.
                </p>

                <p>
                    To get through the next room, Six must jump onto the
                    cardboard box, then the bed to reach the small window. In
                    the room with the hanging man, the next door’s doorknob
                    is too high for Six to reach so she must drag the wooden
                    chair to get higher.
                </p>
                
                </div>
            </section>

          <section>
                <div class="backgroundbawahlocationbeda">
                <div id="gambarkiri">
                    <img src="prisonfridge.png">
                </div>
                    <p id="solutionkanan">
                        Once through, she must open the refrigerator
                        door which will then act as a makeshift
                        ladder to reach the top of the wooden
                        structure. After climbing to the top of the
                        wooden structure, Six must run along its
                        roof and jump over the gap while avoiding
                        the leeches that will drop from the pipes
                        above. She will then reach a small chamber
                        with a lever that must be pulled down to
                        open the next door. Jumping over a gap will
                        bring her to a boarded up door, but the
                        bottom board can be removed, providing a
                    </p>
                </div>
          </section>
          
          <section>
                <div class="backgroundbawahlocationbeda">
                <p id="palingbawahloc">
                    The following area is where Six’s lighter will
                    be most important in the game. While
                    pursuing a Nome, she will fall through some
                    weakened floorboards into a dark chamber
                    filled with black goo and Leeches. Six must
                    continue right and avoid the creatures until
                    she reaches a wooden door that will give way
                    with one push. This will grant her access to a
                    large chamber filled with wooden walkways
                    and ladders.
                </p>

                <div id="gambarlocationkanan">
                    <img src="prisonleeches.png">
                </div>
                </div>
          </section>

          <section>
                <div class="backgroundbawahlocationbeda">
                <h1>comments</h1>
                
                <form action=" " method="POST">
                    <input type="text" name="vnama" id="inputnama" placeholder="Name*"><br><br>
                    <input type="text" name="vemail" id="inputnama" placeholder="Email*"><br><br>
                    <textarea for="isipesan" name="vkomen" placeholder="Write comment*"></textarea><br><br>
                    <button class="button" name="vsend">Send</button>
                </form>

                <div id="komentar">
                    <php?
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
                </div>
            </div>
          </section>
    </body>
</html>