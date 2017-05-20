<!DOCTYPE html>
<html>
<head>
	<title>ProjektasZ</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/Gstyle.css">
    <link rel="stylesheet" type="text/css" href="css/Nstyle.css">
    <link rel="stylesheet" type="text/css" href="css/Lstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<?php /*include('db.php');*/ ?>
<section class="main-content">
<?php include('navBar.php');?>
          
 <div class="carousel">
    <a class="modal-trigger carousel-item" href="#planet1"><img src="http://lorempixel.com/250/250/nature/1"></a>
    <a class="modal-trigger carousel-item" href="#planet2"><img src="https://upload.wikimedia.org/wikipedia/commons/0/02/OSIRIS_Mars_true_color.jpg"></a>
    <a class="modal-trigger carousel-item" href="#planet3"><img src="http://lorempixel.com/250/250/nature/3"></a>
    <a class="modal-trigger carousel-item" href="#planet4"><img src="http://lorempixel.com/250/250/nature/4"></a>
    <a class="modal-trigger carousel-item" href="#planet5"><img src="http://lorempixel.com/250/250/nature/5"></a>
  </div>

</section>

<?php include('footer.php');?>
<?php for($i = 1; $i<=5; $i++): ?>
<div id="planet<?=$i?>" class="plmost modal plbody">
		<?php

		// $id = $i;
		// $sql = "SELECT  name, about, image FROM planet where ID = '" . $id . "' limit 1";

		// $result = mysqli_query($conn, $sql);
		// $value = mysqli_fetch_assoc($result);
		$value = array(
			'name' => 'Marxs '.$i,
			'image' => 'img/mars.jpg',
			'about' => 'Marxs is a totally boring planet where nothing grows and is red. Also, there are only robots there'
		);
		$_SESSION['myid'] = $value;
		// print_r($value) ;

		?>

		<div class="modal-content">
			<button class="modal-close btn-flat" style="position: absolute; top: 0;right: 0">X</button> 
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
		
	</div>
<?php endfor; ?>
<script type="text/javascript" src="js/Gscript.js"></script>
<script type="text/javascript" src="js/Nscript.js"></script>
<script type="text/javascript" src="js/Lscript.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
