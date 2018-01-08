<?php
require_once ( __DIR__ . '/functions.php');
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('+', ' ', $_GET['search_text']);
$redirect = str_replace(' ', '_', $name);

  header("Location:" . ABS_URL . "public/product_list.php?search_text=$redirect");
  exit;
?>
