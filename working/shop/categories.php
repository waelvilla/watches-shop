<?php include '../header.php'; 

$categories=$db -> query("select * from watches_categories"); 



?>
<div class="row">
  <?php while ($category = $categories -> fetch_assoc()): ?>
  <div class="col-lg-4 col-md-12">
    <div class="card">
    
      <div class="view">
        <img src="../../img/p<?php echo $category['id'];?>.jpg" class="card-img-top category-image"
          alt="photo">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <div class="card-body">
        <h4 class="card-title"><?php echo $category['name']; ?></h4>
        <p class="card-text">Browse our selection of super fancy watches for all sorts of occasions. These watches are very flexibile, durable, water resistant, you name it.</p>
        <a href="#" class="btn btn-primary">View</a>
      </div>

    </div>
  </div>
  <?php endwhile; ?>
</div>


<?php include '../footer.php' ?>