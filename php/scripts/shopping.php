<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

session_start();

/*if(isSet($_SESSION['cart'])){
  $cart = $_SESSION['cart'];
}else{
  $cart = new ShoppingCart();
  $_SESSION['cart'] = $cart;
}

$name = str_replace('%20', ' ', $_GET['name']);
$price = $_GET['price'];

$item = new Item($name, $name, $price);
$_SESSION['test'] = $item;*/

$cart = new ShoppingCart();

$w1 = new Item('W139', 'Some Widget', 23.45);
$w2 = new Item('W384', 'Another Widget', 12.39);
$w3 = new Item('W55', 'Cheap Widget', 5.00);

$cart->addItem($w1);
$cart->addItem($w2);
$cart->addItem($w3);

$_SESSION['cart'] = $cart;

?>
