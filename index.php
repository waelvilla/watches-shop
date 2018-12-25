	<!-- header -->
	<?php
	include 'working/header.php';
	$categories=$db -> query("select * from watches_categories");
	?>
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
	<div id="cardContainer" class="center card-deck">
		<?php while ($category = $categories -> fetch_assoc()): ?>
		  <div class="card">
		    <img class="card-img-top" src="./img/p<?php echo $category['id'];?>.jpg" >
		    <div class="card-body">
		     	<h5 class="card-title"><?php echo $category['name']; ?></h4>
		        <p class="card-text">Browse our selection of super fancy watches for all sorts of occasions. These watches are very flexibile, durable, water resistant, you name it.</p>
		        <a href="shop.php?id=<?php echo $category['id']; ?>" class="btn btn-primary">View</a>
		    </div>
		  </div>
  		<?php endwhile; ?>
	</div>
		<!-- end cards -->
		<!-- footer -->
		<?php include 'working/footer.php'; ?>
		<!-- end footer -->
