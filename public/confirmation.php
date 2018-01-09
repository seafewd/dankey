<?php

//create email confirmation
$cart = unserialize($_SESSION['cart'])
$reciever = $_SESSION['user'];
$subject = "Your Order on DankeyTec!";
$from = "From: Dankey's TecShop <no-reply@dankeytec.ch>";
$intro = "You're order has been placed. Thank you, mate!\n\nOrder Overview \n\n";
$disclaimer = "PLEASE DONT RESPOND TO THAT EMAIL";
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
$text = "Client X ordered bullshit!";
mail($reciever, $subject, $text, $from);
unset($_SESSION['cart']);

?>
