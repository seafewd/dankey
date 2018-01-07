<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

session_start();

if(!isSet($_GET['qty'])){}

  if(isSet($_SESSION['cart'])){
    $cart = unserialize($_SESSION['cart']);
  }else{
    $cart = new ShoppingCart();
  }
  $name = str_replace('%20', ' ', $_GET['name']);
  $price = $_GET['price'];
  $item = new Item($name, $name, $price);
  $cart->addItem($item);
  $_SESSION['cart'] = serialize($cart);
}else{
  $cart = unserialize($_SESSION['cart']);

  $name = str_replace('_', ' ', $_GET['name']);
  $price = $_GET['price'];
  $qty = $_GET['qty'];

  $item = new Item($name, $name, $price);

  $cart->updateItem($item, $qty);
  $_SESSION['cart'] = serialize($cart);
}


?>
