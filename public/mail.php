<?php
//confirmation to client
$reciever = 'patrick.werlen@hotmail.com';
$subject = "Your Order on DankeyTec!";
$from = "From: Nils Reimers <noidea@dankeytec.ch>";
$text = "You're order has been placed. Thank you, mate!";
//sending
mail($reciever, $subject, $text, $from);

?>
