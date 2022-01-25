<?php 

if (empty($_SESSION['cart'])){
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);
?>

<p>
    Product was successfully added to your cart.
    <a href="../Website/shopping-cart.php">View Shopping cart</a>
</p>