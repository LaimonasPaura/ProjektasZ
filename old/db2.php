<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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

	?>
		

	</body>
</html>