<?php
include '../header.php';
$hidden="d-none";
if(isset($_SESSION['cart'])){
    $hidden="";
    $db_cart=$_SESSION['cart'];
    $cart=array();
// for($i=0; $i<count($db_cart); $i++){
//     $id=$db_cart[$i];
//     $products=$db -> query("select * from watches where id='$id'");
//     $product= $products -> fetch_assoc();
//     array_push($cart,$product);
// }
    foreach ($db_cart as $product){
        $products=$db -> query("select * from watches where id='$product'");
        $temp_product=$products -> fetch_assoc();
        array_push($cart,$temp_product);

    }
    $total=0;
    $quantity=1;
    foreach($cart as $product){
        if(isset($_POST['quantity'])){
            $quantity=$_POST['quantity'];
        }
        $total=$total+($product['price']*$quantity);
    }
}


?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">WATCHES CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
            <?php if(!empty($cart)){?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $item ){?>
                        <tr>
                            <td><img src="/watches-shop/img/p<?php echo $item['id']?>.jpg" class="w-25"/> </td>
                            <td><a href="product.php?id=<?php echo $item['id']?>'"><?php echo $item['name'] ?></a></td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" name="quantity" value="1" /></td>
                            <td class="text-right">$<?php echo $item['price']?></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"  onclick="window.location.href='delete_cart.php?id=<?php echo $item['id'];?>'"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <?php } ?>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">$ <?php echo $total ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">$6,90 </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>$<?php echo $total+ 6.90 ?></strong></td>
                        </tr>
                        
                    </tbody>
                </table>
                <?php } 
                 else{ ?>
                    <div><h1 class="center pb-5">There is no items in cart</h1></div>
                <?php } ?>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light " onclick="window.location.href='shop.php'">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase <?php echo $hidden ?>" onclick="window.location.href='checkout.php'">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php include '../footer.php';?>