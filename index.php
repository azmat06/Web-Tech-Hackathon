<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title over here</title>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
	<link rel="stylesheet" type="text/css" href="css/form-design.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "icon" href = "image/pageIco.png" type = "image/x-icon">
	<script type="text/javascript" src=js/index.js></script>
</head>
<body>
	<?php 
		include_once 'header.php';
	 ?>
	<section class="main">
		<?php include_once 'aside.php' ?>

		<main id="mainshit" class="form-style">
			<div style="width: 80%; transform: rotateY(155deg) rotateX(69deg); font-size: 250px; position: static;color: blue; "></div>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>