<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

$name = str_replace('_', ' ', $_GET['product']);

echo "<script type='text/javascript'>alert('$name');</script>";

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT * FROM graphics_cards WHERE name = :name");
$result = $statement->execute(array('name'=>$name));
$product = $statement->fetch();

echo $product['name'];
echo $product['price'];
echo $product['storage'];
echo $product['width'];
echo $product['height'];
echo $product['length'];

 ?>
