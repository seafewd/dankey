<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

if(isSet($_SESSION['cart'])){
  //nothing here atm
}else{
  $cart = new ShoppingCart();
  $_SESSION['cart'] = $cart;
}

?>
