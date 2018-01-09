<?php
require_once ( __DIR__ . '/../config/head.php' );

$_SESSION['order'] = "yes";

header("Location: https://dankeytec.internet-box.ch/public/confirmation.php");
die();

 ?>
