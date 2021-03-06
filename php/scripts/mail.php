<?php
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

function createConfirmationMail(){
  if(isset($_SESSION['cart'])){
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : null;
    $last_name = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : null;
    $receiver = isset($_SESSION['email']) ? $_SESSION['email'] : null;

    $cart = unserialize($_SESSION['cart']);

    $subject = "Your order on DankeyTec!";
    $from = "From: Dankey's TecShop <no-reply@dankeytec.ch>";
    $intro = "Your dank order has been placed. Thank you, mate!\n\nOrder Overview \n\n";
    $disclaimer = "PLEASE DO NOT RESPOND TO THIS EMAIL";
    $order = "";
    $totalprice = 0;
    foreach ($cart as $arr) {
      $item = $arr['item'];
      $order = $order . $item->getName() . "\t" . $arr['qty'] . "\t" . $item->getPrice() . "\n";
      $totalprice += $item->getPrice() * $arr['qty'];
    }
    $text = $intro . $order . "\n Total price \t\t" . $totalprice . "\n\n" . $disclaimer;

    //email to customer
    mail($receiver, $subject, $text, $from);

    //confirmation to office
    $receiver = 'z00bi@protonmail.com';
    $subject = "NEW ORDER";
    $from = "From: newOrder <order@dankeytec.ch>";
    $text = "Client " . $name . " " . $last_name . "\n" . $order;
    mail($receiver, $subject, $text, $from);

  }}
  ?>
