<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

session_start();

if(isSet($_SESSION['cart'])){
  $cart = $_SESSION['cart'];
}else{
  $cart = new ShoppingCart();
  $_SESSION['cart'] = $cart;
}

$name = str_replace('%20', ' ', $_GET['name']);
$price = $_GET['price'];

$item = new Item($name, $name, $price);
$_SESSION['test'] = $item;

?>
