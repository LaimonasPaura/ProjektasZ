<!DOCTYPE html>
<html>
<head>
	<title>planet1</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/Gstyle.css">
	<link rel="stylesheet" type="text/css" href="css/Nstyle.css">
	<link rel="stylesheet" type="text/css" href="css/Lstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="plbody">
<?php /*include('db2.php');*/ ?>
<div class="plmost">


		<?php

		// $id = $_GET['ID'];
		// $sql = "SELECT  name, about, image FROM planet where ID = '" . $id . "' limit 1";

		// $result = mysqli_query($conn, $sql);
		// $value = mysqli_fetch_assoc($result);
		$value = array(
			'name' => 'Marxs',
			'image' => 'img/mars.jpg',
			'about' => 'Marxs is a totally boring planet where nothing grows and is red. Also, there are only robots there'
		);
		$_SESSION['myid'] = $value;
		// print_r($value) ;

		?>

		<div class="plmain">
			<h1><?php echo $value["name"]; ?></h1>
		</div>
		<div class="pl1">
			<p>
				<a href="https://upload.wikimedia.org/wikipedia/commons/0/02/OSIRIS_Mars_true_color.jpg"><img class="planetimg" src="<?php echo $value["image"]; ?>"></a>
				<?php echo $value["about"]; ?>
			</p>
		</div>
	</div>

	<script type="text/javascript" src="js/Gscript.js"></script>
	<script type="text/javascript" src="js/Nscript.js"></script>
	<script type="text/javascript" src="js/Lscript.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>