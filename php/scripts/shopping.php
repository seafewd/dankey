<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

function addToCart($name, $price) {
  echo "<script type='text/javascript'>alert('called that shit');</script>";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    $cart = new ShoppingCart();
  }
  $cart->addItem(new Item($name, $name, $price));
  foreach ($cart as $arr) {
        $item = $arr['item'];
        printf('<p><strong>%s</strong>: %d @ $%0.2f each.<p>', $item->getName(), $arr['qty'], $item->getPrice());
    }
}
?>
