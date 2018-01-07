<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/splash_image_box.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('_', ' ', $_GET['product']);

$pdo = DB::getInstance();

$statement = $pdo->db->prepare("SELECT * FROM memory WHERE name = :name");
$result = $statement->execute(array('name'=>$name));
$product = $statement->fetch();

echo '<p>' . $product['name']. "</p>\n";
echo '<p>' . $product['price']. "</p>\n";

 ?>
