<!DOCTYPE html>
<html>
<head>
	<title>PHP Projektas</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grupe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT id, name, surname, age FROM lentele";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {    //patikrinam kiek stulpeliu!!!!!!!
    // output data of each row

    echo "<table border='1'>";

    while($row = mysqli_fetch_assoc($result)) {   //visus atsakymus is eiles ikeliam i row, ir su while eilute po eilutes tai padarom

    	echo "<tr>";

    	// //print_r($row);
    	// echo "<br><br>";
