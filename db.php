



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