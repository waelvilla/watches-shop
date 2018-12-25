    <?php 
    include '../header.php';

    $id=$_GET['id']; 
    $rows=$db -> query("select * from watches where id ='$id'");
    $product= $rows -> fetch_assoc();
    $category_id=$product['category_id'];
    $categories=$db -> query("select * from watches_categories where id='$category_id'");
    $category=$categories-> fetch_assoc();
    $price=$product['price'];


    if(isset($_POST['add_to_cart'])){
      $price = htmlspecialchars($price);
      $quantity=htmlspecialchars($_POST['quantity']);
      if(empty($_SESSION['cart'])){
        $_SESSION['cart']=array($id);
      }
      else{
        array_push($_SESSION['cart'], $id);
      }
      if($price){
        header('location: cart.php?');
        die();
      }
    }

  ?>
    
    
  <?php  ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-9">
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="../../img/p<?php echo $product['id'];?>.jpg" alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $product['name']; ?></h3>
            <h5>$<?php echo $product['price'];?></h4>
            <h6>Category: <?php echo $category['name'];?></h6>
            <form class="buy-now" method="post">
              <label for="quantity">Quantity:</label>
              <select name="quantity" id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <button type="submit" class="btn btn-success" name="add_to_cart">Add To Cart</button>
            </form>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <h1 class="hellothere">hello</h1>

  <?php include '../footer.php';?>