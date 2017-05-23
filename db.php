



<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "planets";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		echo "Connected successfully";

		echo "<br><br>";

		$id = 1;
		$sql = "SELECT  name, about, image FROM planet where id = '$id' limit 1";

		$result = mysql_query($conn, $sql);
		$value = mysql_fetch_assoc($result);
		$_SESSION['myid'] = $value;

		echo "$value";
		// $result = mysqli_query($conn, $sql);

		// if (mysqli_num_rows($result) > 0) {

		    // output data of each row
			// $row = mysqli_fetch_assoc($result);

		    // echo "<table border='1'>";

		    // while ($row = mysqli_fetch_assoc($result)) {

		    // 	echo "<tr>";

		    //     echo "<td>" . $row["ID"] . "</td>";
		    //     echo "<td>" . $row["name"] . "</td>";
		    //     echo "<td>" . $row["surname"] . "</td>";
		    //     echo "<td>" . $row["age"] . "</td>";

		    //     echo "</tr>";
		    // }

		    // echo "</table>";

		//  else {

		//     echo "0 results";
		// }

	?>


	<!-- <!-- style="background: url('<?php echo $value["image"]; ?>');" --> -->

	<div class="carousel">
    <a class="modal-trigger carousel-item" href="#planet1"><img src="https://upload.wikimedia.org/wikipedia/commons/0/02/OSIRIS_Mars_true_color.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet2"><img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet3"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Jupiter_and_its_shrunken_Great_Red_Spot.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet4"><img src="http://www.8planets.co.uk/wp-content/themes/8planets/images/saturn_1_lg.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet5"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Venus-real_color.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet6"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Mercury_in_color_-_Prockter07-edit1.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet7"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/Uranus2.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet8"><img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Neptune_Full.jpg"></a>
  </div>


  Mars is the fourth planet from the Sun and is the second smallest planet in the solar system. Named after the Roman god of war, Mars is also often described as the “Red Planet” due to its reddish appearance. The ancient Greeks called the planet Ares, after their god of war; the Romans, associating the planet’s blood-red colour with Mars, their own god of war, whilst Egyptian priests called on ‘Her Desher’, or ‘the red one’. Mars and Earth have approximately the same landmass. Surface gravity on Mars is only 37% of the Earths (meaning you could leap nearly three times higher on Mars). Also, Mars is home to the tallest mountain in the solar system (Olympus Mons, 21km high and 600km in diameter). There have been a total of 40 missions to Mars but only 18 of them have been successful (Most recent – Mars Curiosity 2012). Mars is home for the largest dust storms in the solar system, which can last for months and cover the entire planet. It is known that some pieces of Mars have fallen to Earth. Although for years Mars has been known to have water only in the ice form, scientist spotted signs of liquid water trickling form the cliffs seen in satellite images. 

  Mars is the fourth planet from the Sun and is the second smallest planet in the solar system. Named after the Roman god of war, Mars is also often described as the “Red Planet” due to its reddish appearance. The ancient Greeks called the planet Ares, after their god of war; the Romans, associating the planet’s blood-red colour with Mars, their own god of war, whilst Egyptian priests called on ‘Her Desher’, or ‘the red one’'. Mars and Earth have approximately the same landmass. Surface gravity on Mars is only 37% of the Earth’s (meaning you could leap nearly three times higher on Mars). Also, Mars is home to the tallest mountain in the solar system (Olympus Mons, 21km high and 600km in diameter). There have been a total of 40 missions to Mars but only 18 of them have been successful (Most recent – Mars Curiosity 2012). Mars is home for the largest dust storms in the solar system, which can last for months and cover the entire planet. It is known that some pieces of Mars have fallen to Earth. Although for years Mars has been known to have water only in the ice form, scientist spotted signs of liquid water trickling form the cliffs seen in satellite images. 