<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ProjTitle</title>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
	<link rel="stylesheet" type="text/css" href="css/form-design.css">
	<link rel="stylesheet" type="text/css" href="css/signupANDlogin.css">
	<link rel="stylesheet" type="text/css" href="css/onlysignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "icon" href = "image/pageIco.png" type = "image/x-icon">
	<script type="text/javascript" src=js/index.js></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<?php 
		include_once 'header.php';
	 ?>
	<section class="main">
		<?php include_once 'aside.php' ?>

		<main id="mainshit" class="form-style">
			<section class="container1">
				<div class="container2">Sign Up</div>
				<div class="container4">
					
					<section class="container8" >
						<a href="usersignup.php" class="link1"><i class="fas fa-user-alt" style='font-size: 3vh;'></i> Sign up as User</a>
					</section>
				
				</div>
			</section>
		</main>

	</section>
	<?php include('footer.php'); ?>

</html>