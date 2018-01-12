<?php
require_once ( ABS_FILE . '/php/classes/ShoppingCart.php');
require_once ( ABS_FILE . '/php/classes/Item.php');

function createConfirmationMail(){
  if(isset($_SESSION['cart'])){
    $cart = unserialize($_SESSION['cart']);
    $reciever = $_SESSION['email'];
    $subject = "Your Order on DankeyTec!";
    $from = "From: Dankey's TecShop <no-reply@dankeytec.ch>";
    $intro = "Your order has been placed. Thank you, mate!\n\nOrder Overview \n\n";
    $disclaimer = "PLEASE DONT RESPOND TO THIS EMAIL";
    $order = "";
    $totalprice = 0;
    foreach ($cart as $arr) {
      $item = $arr['item'];
      $order = $order . $item->getName() . "\t" . $arr['qty'] . "\t" . $item->getPrice() . "\n";
      $totalprice += $item->getPrice() * $arr['qty'];
    }
    $text = $intro . $order . "\n Total price \t\t" . $totalprice . "\n\n" . $disclaimer;
    //sending
    mail($reciever, $subject, $text, $from);
    //confirmation to office
    $reciever = 'patrick.werlen@students.bfh.ch';
    $subject = "NEW ORDER";
    $from = "From: newOrder <order@dankeytec.ch>";
    $text = "Client " + $_SESSION['username'] + "\n" + $order;
    mail($reciever, $subject, $text, $from);
  }}
  ?>
