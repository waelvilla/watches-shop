<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>	
<body>
	<?php include 'working/db.php';
	$sql= "insert into watches(id,name,category,price) values(1,'w1','c1','123')";
	$val = $db -> query($sql);
	?>	
	<!-- header -->
	<?php include 'working/header.php'; ?>
	<!-- end header -->

	<!--slides-->
	<div id ="slides" class="center">
		<img class="Slides" src="./img/p1.jpg">
		<img class="Slides" src="./img/p2.jpg">
		<img class="Slides" src="./img/p3.jpg">
		<img class="Slides" src="./img/p4.jpg">
		<img class="Slides" src="./img/p5.jpg">
	</div>
	<!--end slides-->
	<!-- about me -->
	<div id="aboutMe" class="text center">
		<h1>about me</h1>
		<p>
			ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>
	<!-- end about me-->
	<!-- cards --->
	<div id="cardContainer" class="center">
		<div id="cardContainer" class="card-group bg-primary" class="center">
			<div class="card bg-secondary mb-3">
				<p class="card-header">card 1</p>
				</div>
			<div class="card bg-secondary mb-3">
				<p class="card-header">card 2</p>
			</div>
			<div class="card bg-secondary mb-3">
				<p class="card-header">card 3</p>
			</div>
		</div>
		<!-- end cards -->
		<!-- footer -->
		<?php include 'working/footer.php'; ?>
		<!-- end footer -->
		<!--bootstrap scripts-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="./js/script.js"></script>
		<!--end bootstrap scripts-->
	</body>
</html>