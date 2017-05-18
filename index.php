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

    	echo "<td>" . $row["id"]. "</td>";
    	echo "<td>" . $row["name"]. "</td>";
    	echo "<td>" . $row["surname"]. "</td>";
    	echo "<td>" . $row["age"]. "</td>";


       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " " . $row["age"]. "<br>";

        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "0 results";
}


$sql = "SELECT ID, name, message FROM atsiliepimai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {    //patikrinam kiek stulpeliu!!!!!!!
    // output data of each row

    echo "<table border='1'>";

    while($row = mysqli_fetch_assoc($result)) {   //visus atsakymus is eiles ikeliam i row, ir su while eilute po eilutes tai padarom

    	echo "<tr>";

    	// //print_r($row);
    	// echo "<br><br>";

    	echo "<td>" . $row["ID"]. "</td>";
    	echo "<td>" . $row["name"]. "</td>";
    	echo "<td>" . $row["message"]. "</td>";
    	


       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " " . $row["age"]. "<br>";

        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "0 results";
}
//mysqli_close($conn);
?>
<?php include('header.php'); ?>
<h1>Labas PHP</h1>
<?php
echo "<p>Labas, Seniuk</p>";

if ($_GET) {


$name = $_GET['name'];

$message =$_GET['message'] ;

echo "$name";
echo "<br><br>";
echo "$message";
echo "<br><br>";
$sql = "INSERT INTO atsiliepimai (ID, name, message)
VALUES ('', '".$name."', ' ".$message."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>
<form action= "about.php" method="get">
	Vardas : <input type="text" name="name">

	atsiliepimai: <textarea name="message"> 
	</textarea>
	<input type="submit" value="Irasyti">
</form>

</body>
</html>
