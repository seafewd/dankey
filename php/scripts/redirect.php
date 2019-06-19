<?php
require_once ( __DIR__ . '/../config/head.php' );

$_SESSION['order'] = "yes";

header("Location: " . rootDir() . "public/confirmation.php");
die();

 ?>
