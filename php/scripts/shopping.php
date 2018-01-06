<?php
function addToCart($name, $price) {
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    $cart = new ShoppingCart();
  }
  $cart->addItem(new Item($name, $name, $price));
}
?>
