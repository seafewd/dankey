<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

function addToCartPHP() {
  echo "<script type='text/javascript'>alert('called that shit');</script>";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    echo "<script type='text/javascript'>alert('cart created');</script>";
    $cart = new ShoppingCart();
  }
}
?>
