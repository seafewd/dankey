<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

if(isSet($_SESSION['cart'])){
  $cart = $_SESSION['cart'];
}else{
  $cart = new ShoppingCart();
  $_SESSION['cart'] = $cart;
}
echo "<script type='text/javascript'>alert('bader');</script>";
$name = str_replace('%20', ' ', $_GET['name']);
$price = $_GET['price'];

$cart->addItem(new Item($name, $name, $price));
?>
