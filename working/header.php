<?php 
include 'db.php';

$hidden="d-none";
$login_hidden="";
$username="";
$admin="d-none";

if(isset($_SESSION['valid'])) {
    // header('Location: /watches-shop/working/login.php');
    $hidden="";
    $login_hidden="d-none";
    $username=$_SESSION['valid'];
    
    if(($_SESSION['category']=="admin")){
        $admin="";
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    header('Location: /watches-shop/index.php');    
}


?>
<html>
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/watches-shop/css/normalize.css">
    <link rel="stylesheet" href="/watches-shop/css/style.css">
    <link rel="stylesheet" href="/watches-shop/css/shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark blue-gradient justify-content-center">
        <a class="navbar-brand" href="/watches-shop/index.php">Watches </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/watches-shop/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/watches-shop/index.php#aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/watches-shop/working/shop/categories.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/watches-shop/working/shop/shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/watches-shop/working/shop/cart.php">Cart</a>
                </li>

            </ul>
            <span class="nav-item  ml-auto">
                <div class="nav-item dropdown <?php echo $hidden;?>">
                    <a class="nav-link dropdown-toggle white-text" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Logged in as <?php echo $username;?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cart</a>
                    <a class="dropdown-item <?php echo $hidden;?>" href="?logout=1">Log Out</a>
                    <div class="dropdown-divider <?php echo $admin?>"></div>
                    <a class="dropdown-item <?php echo $admin?>" href="/watches-shop/working/admin/">Admin Dashboard</a>
                    </div>
                </div>
                <a href="/watches-shop/working/login.php" class="nav-link white-text <?php echo $login_hidden;?>">Login | Signup</a>

            </span>
        </div>
    </nav>
