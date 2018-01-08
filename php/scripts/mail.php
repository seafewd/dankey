<?php

function sendConfirmation(){
  $reciever = $_SESSION['user'];
  $subject = "Your Order on DankeyTec!";
  $from = "From: Dankey's TecShop <no-reply@dankeytec.ch>";
  $text = "You're order has been placed. Thank you, mate! PLEASE DONT RESPOND TO THAT EMAIL";
  //sending
  mail($reciever, $subject, $text, $from);

  //confirmation to office
  $reciever = 'patrick.werlen@students.bfh.ch';
  $subject = "NEW ORDER";
  $from = "From: newOrder <order@dankeytec.ch>";
  $text = "Client X ordered bullshit!";

  mail($reciever, $subject, $text, $from);

}

?>
