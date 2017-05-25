<!DOCTYPE html>
<html>
<head>
	<title>ProjektasZ</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/Gstyle.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/Nstyle.css">
    <link rel="stylesheet" type="text/css" href="css/Lstyle.css">
    <link rel="stylesheet" type="text/css" href="css/PLstyle.css">
    <link rel="stylesheet" type="text/css" href="css/Fstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body style="    background-image: url(img/bg.jpg);
    /* min-height: 90vh; */
    background-size: cover;">
<?php include('db2.php'); ?>
<section class="main-content">
<?php include('navBar.php');?>
          
<div class="carousel" >
    <a class="modal-trigger carousel-item" href="#planet1"><<div class="planet_mars"> 
      <div class="wrap_mars">
       <div class="background_mars"></div>
       <!--      <div class="clouds"></div>    -->
   </div>
   <div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet2"><<div class="planet_mars"> 
  <div class="wrap_mars">
  <div class="background_earth"></div>
       <div class="clouds"></div>  
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet3"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_jupiter"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet4"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_saturn"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet5"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_venus"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet6"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_mercury"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet7"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_uranus"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
<a class="modal-trigger carousel-item" href="#planet8"><<div class="planet_mars"> 
  <div class="wrap_mars">
   <div class="background_neptune"></div>
   <!--      <div class="clouds"></div>    -->
</div>
<div class="mask_mars"></div>
</div>></a>
</div>

</section>

<?php include('footer.php');?>
<?php for($i = 1; $i<=8; $i++): ?>
<div id="planet<?=$i?>" class="plmost modal plbody">
		<?php
		$id = $i;
		$sql = "SELECT  name, about, image FROM planet where ID = '" . $id . "' limit 1";

		$result = mysqli_query($conn, $sql);
		$value = mysqli_fetch_assoc($result);
		// $value = array(
		// 	'name' => 'Marxs '.$i,
		// 	'image' => 'img/mars.jpg',
		// 	'about' => 'Marxs is a totally boring planet where nothing grows and is red. Also, there are only robots there'
		// );
	 $_SESSION['myid'] = $value;
		// print_r($value) ;

		?>
<div style="
    width: 100%;
    height: 429px;
    position: absolute;
    top: 0;
    background: url('<?php echo $value["image"]; ?>');
    /* background-attachment: fixed; */
    background-size: cover;
    background-position: center top;
"></div>
		<div class="modal-content"  style="height: 429px;
    overflow-y: scroll;
    position: relative; ">

			<button class="modal-close btn-flat" style="position: absolute; top: 0;right: 0">X</button> 
				<div class="plmain" >
					<h1><?php echo $value["name"]; ?></h1>
				</div>
				<div class="pl1">
					<p>
						<a href="<?php echo $value["image"]; ?>"><img class="planetimg" src="<?php echo $value["image"]; ?>"></a>
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
