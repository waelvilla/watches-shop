<?php include '../header.php'; 
if(!isset($_SESSION['valid'])) {
    header('Location: /watches-shop/working/login.php');
}
?>
<div class="h-75">

<h1 class="pt-5 center">Thank you for shopping with us!</h1>

<h4 class="pb-5 center">You will get your products soon</h4>

</div>

<?php include '../footer.php'; ?>